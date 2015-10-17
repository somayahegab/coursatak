@extends('layouts.master')
@section('header')<h2>Log In</h2>@stop
@section('content')
    <form class="form-horizontal" method="post" action="/courseregister">
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
         
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
@stop
