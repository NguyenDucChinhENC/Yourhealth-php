
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
                            <label for="password-confirm" class="col-md-4 control-label">Coach</label>
                            <div class="col-md-6">
                                <label><input class="col-md-12" type="radio" name="coach" id="coach" value="1">Yes</label>
                                <label><input class="col-md-12" type="radio" name="coach" id="coach" value="0">No</label>
                            </div>
      
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Practitioner</label>
                            <div class="col-md-6">
                                <label><input class="col-md-12" type="radio" name="practitioner" id="practitioner" value="1">Yes</label>
                                <label><input class="col-md-12" type="radio" name="practitioner" id="practitioner" value="0">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="weight" class="col-md-4 control-label">Weight</label>

                            <div class="col-md-6">
                                <input id="weight" type="number" class="form-control" name="weight" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job" class="col-md-4 control-label">Job</label>

                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control" name="job" required>
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
<script type="text/javascript">
    $("#form-horizontal").validate({
        rules:{
            username:{
                required:true,
                minlength:3
            },
            password:{
                required:true,
                minlength:6
            },
            password_confirmation:{
                equalTo: "#password"
            },
            email:{
                required:true,
                email:true
            },
            username:{
                required:true,
                minlength:3
            }
        },
        messages:{
            username:{
                required:"Vui lòng điền User name",
                minlength:"User Name phải từ 3 ký tự trở lên"
            },
            password:{
                required:"Vui lòng nhập mật khẩu",
                minlength:"Mật khẩu phải từ 6 ký tự trở lên"
            },
            password_confirmation:{
                equalTo:"Mật khẩu xác nhận không đúng"
            },
        }
    })
</script>
@endsection
