@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <h1>{{$user->name}}'s Profile</h1>
        <form enctype="multipart/form-data" action="/profile" method="post">
            <label>Update Profile Image</label>
            <input  type="file" name="avatar">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="pull-left btn btn-sm btn-primary" value="Change Profile">
        </form>
    </div>
</div>

@endsection
