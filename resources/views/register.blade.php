@extends("main");

@section('title')
Đăng ký
@endsection
@section('content')
<form method="post" action="{{Asset('register')}}" id="form-register">
	<h2>Đăng nhập</h2>
	<input type="text" name="username" id="username" placeholder="User Name" class="form-control"/>
	<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
	<input type="password" name="password_confirmation" id="Re-password" placeholder="password_confirmation" class="form-control"/>
	<input type="email" name="email" id="email" placeholder="Email" class="form-control"/>
	<input type="text" name="name" id="name" placeholder="Your Name" class="form-control"/>
	<div class="radio">
      <label><input type="radio" name="coach" id="coach" value="true">is Coach</label>
      <label><input type="radio" name="coach" id="coach" value="false">not Coach</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="practitioner" id="practitioner" value="true">is Practitioner</label>
      <label><input type="radio" name="practitioner" id="practitioner" value="false">not Practitioner</label>
    </div>
	<input type="date" name="birthday" id="birthday" placeholder="Birthday" class="form-control"/>
	<input type="text" name="address" id="address" placeholder="Address" class="form-control"/>
	<input type="number" name="weight" id="weight" placeholder="Weight" class="form-control"/>
	<input type="text" name="job" id="job" placeholder="Job" class="form-control"/>
	<button class="btn btn-lg btn-primary btn-block">Đăng Ký</button>
</form>
<script type="text/javascript">
	$("#form-register").validate({
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