<form action="rcondatabase" method="post">
@csrf
@if($errors->any())
@foreach($errors->all() as $err)

    <li>{{$err}}</li>
@endforeach
@endif
Enter name:
<input type="text" name="name">
<br><span style="color: red;">@error('name'){{$message}}@enderror</span>
<br>
Enter password:
<input type="text" name="password">
<br><span style="color: red;">@error('password'){{$message}}@enderror</span>
<br>
<input type="submit" name="submit">
</form>