<form action="/public/test/result/" method="put" >
	{{ csrf_field() }}
	<input type="text" name="arr">
	<input type="submit">	
</form>





{{--
<form action="/public/test/admin/{param}">
	<input type="text" name="param">
	<input type="submit">
</form>
{{$param??"---"}}
<form action="/public/user/{{$id}}" method="post" >
	{{ csrf_field() }}
	<input type="text" name="user[name]">
	<input type="text" name="user[surname]">
	<input type="submit">
</form>
<form action="/public/test/result" method="post">
	{{ csrf_field() }}
	<input type="text" name="text">
	<input type="submit">
</form>
______________________________________
<form action="/public/test/result/">
	<input type="text" name="text">
	<input type="text" name="text1">
	<input type="text" name="text2">
	<input type="submit">
</form>
_______________________________________
<form action="">
	<input type="text" name="num">
	<input type="text" name="num1">
	<input type="submit">
</form>
{{ $text }}
--}}