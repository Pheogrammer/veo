<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\log;
use App\project;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Events\MessageSent;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = project::get();

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Accessed a system';
        $log->save();

        return view('home',['projects'=>$data]);


    }

    public function finalize()
    {
        return view('finalize');

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Accessed a profile changes page';
        $log->save();
    }

    public function newpost()
    {
        return view('newpost');

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Accessed a write post page';
        $log->save();
    }

    public function savepost(Request $request)
    {
        $datas = new project();
        $path = public_path('posts/'. auth()->user()->id);

        if(!File::isDirectory($path))
        {
        File::makeDirectory($path,$mode = 0777, true, true);
        }

        if($file = $request->file('image'))
        {
            $filename = date('y-m-d').''.time().'-'. auth()->user()->id.'.'.$file->getClientOriginalExtension();
            $targetpath = $path;

            if($file->move($targetpath, $filename))
            {

          $datas->image = $filename;

            }
            else
            {
              return redirect()->back()->withErrors(['message'=>'image Not uploaded, try again!']);

            }
          }else
          {
              return redirect()->back()->withErrors(['message'=>'image Not uploaded, try again!']);

          }

        $datas->project_title = $request['project'];
        $datas->user_id = auth()->user()->id;
        $datas->project_description = $request['desc'];
        $datas->location = $request['location'];
        $datas->area_size = $request['area'];
        $datas->save();

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Wrote and saved a post';
        $log->save();

        return redirect()->route('home')->withErrors(['message'=>'Post Sent Successfully']);
    }

    public function readpost($id)
    {
        $datas = project::where('id',$id)->first();
        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'read a post '.$id;
        $log->save();
        return view('readpost',['datas'=>$datas]);
    }

    public function saveprofile(Request $request)
    {
        $datas = User::where('id',auth()->user()->id)->first();
        $datas->name = $request['firstname'];
        $datas->DOB = $request['dob'];
        $datas->gender = $request['gender'];
        $datas->email = $request['email'];
        $datas->phone_number = $request['phone_number'];
        $datas->phone_number2 = $request['phone_number2'];
        $datas->country = $request['country'];

        $datas->district = $request['district'];
        $datas->street = $request['street'];
        $datas->save();

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Saved profile changes';
        $log->save();

        return redirect()->route('home');
    }
      /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        return view('chat');

        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Viewed profile';
        $log->save();
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        
        $log = new log();
        $log->user_id = auth()->user()->id;
        $log->activity = 'Sent a message in a system';
        $log->save();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);



        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
