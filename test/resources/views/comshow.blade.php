
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{route('coms.edit')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="text" name='text'>
<input type="submit" value="upload">
</form>
</body>
</html>