@extends('layouts.designAndLink.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}





                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fullname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">    
                     
             <select name="department" class="form-control">
              <option value="CSE">CSE</option>
              <option value="ICE">ICE</option>
              <option value="EEE">EEE</option>
                <option value="CE">CE</option>
            
              <option selected value="1">choose</option>
          </select>
                                    
                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">    
                     
             <select name="position" class="form-control">
              <option value="Teacher">Teacher</option>
              <option value="Staff">Staff</option>
            
            
              <option selected value="1">choose</option>
          </select>
                                    
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

       

<!-- Radio button -->

   <div class="form-group">
           <label  class="col-md-4 control-label">Gender</label>

    <div class="col-md-6">
  <label><input type="radio" name="gender" value="male">male </label>
  <label><input type="radio" name="gender" value="female">female</label>
 </div>

</div>














<!---


        <div class="form-group{{ $errors->has('inputphone') ? ' has-error' : '' }}">
                            <label for="inputphone" class="col-md-4 control-label">Fullname</label>

                            <div class="col-md-6">
                                <input id="inputphone" type="text" class="form-control" name="inputphone" value="{{ old('inputphone') }}" required autofocus>

                                @if ($errors->has('inputphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inputphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
-->


<!--

       <div class="form-group{{ $errors->has('Fullname') ? ' has-error' : '' }}">
                            <label for="Fullname" class="col-md-4 control-label">Fullname</label>

                            <div class="col-md-6">
                                <input id="Fullname" type="text" class="form-control" name="Fullname" value="{{ old('Fullname') }}" required autofocus>

                                @if ($errors->has('Fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






-->






                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
