@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3" style="margin-top: 5%">
            <div>
                <h3>Write Your Article</h3>
            </div>
            <form action="{{route('savepost')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="project" required class="form-control" id="projectName">
                </div>
                <div class="form-group">
                    <label for="projectDescription">Project Description</label>
                    <textarea name="desc" required class="form-control" id="projectDescription" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input name="location" required type="text" class="form-control" id="location">

                </div>
                <div class="form-group">
                    <label for="area">Area Size</label>
                    <input name="area" required type="text"  id="area" class="form-control">

                </div>

                <div class="form-group">
                    <label for="area">Upload Image</label>
                    <input name="image" required type="file" accept="image/*"  class="form-control">

                </div>

                <input class="btn btn-success" type="submit" name="submit" value="submit">

            </form>
            <br>
        </div>
    </div>
</div>
@endsection
