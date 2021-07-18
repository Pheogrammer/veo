<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;
use App\User;
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
        return view('home',['projects'=>$data]);
    }

    public function finalize()
    {
        return view('finalize');
    }

    public function newpost()
    {
        return view('newpost');
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

        return redirect()->route('home')->withErrors(['message'=>'Post Sent Successfully']);
    }

    public function readpost($id)
    {
        $datas = project::where('id',$id)->first();
        return view('readpost',['datas'=>$datas]);
    }
}
