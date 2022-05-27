<h1>Form</h1>
 <!-- @if($errors->any())
    @foreach ($errors->all() as $err)
        <li> {{$err}}</li>
   @endforeach
@endif -->
<form action="form1" method="POST">
@csrf
<input type="text" name="name" placeholder="Enter name" value="{{old('name')}}">
<span style="color: red;">@error('name'){{$message}}@enderror</span><br><br> 
<input type="text" name="password" placeholder="Enter password" value="{{old('password')}}">
<span style="color: red;">@error('password'){{$message}}@enderror</span><br><br>
<!-- @if($errors->any())
value="{{old('name')}}"
@endif -->
<button type="submit">submit</button>

</form>