<form method="post" action="./mypost" enctype="multipart/form-data">
  {{csrf_field()}}
	<input type="text"  value="{{old('uname')}}"  name="uname" />

	<input type="password" value="{{old('pwd')}}"  name="pwd" />
	<input type="submit" value="提交" />
</form>