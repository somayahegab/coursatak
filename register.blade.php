@extends('layouts.master')
@section('header')<h2>Sign Up</h2>@stop
@section('content')
    <form class="form-horizontal" method="POST" action="login" accept-charset="UTF-8">
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" name="email" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" name="password" id="inputPassword" placeholder="Password">
        </div>
      </div>
       <div class="control-group">
        <label class="control-label" for="inputName">Name</label>
        <div class="controls">
          <input type="text" name="name" id="inputName" placeholder="Name">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
         
          <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
      </div>
    </form>
@stop
