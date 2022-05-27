<html>
<table border="1">
<tr>
<td>ID</td>
<td>name</td>
<td>email</td>
<td>profile pic</td>
</tr>
@foreach($collection as $val)
<tr>
<td>{{$val['id']}}</td>
<td>{{$val['first_name']}}</td>
<td>{{$val['email']}}</td>
<td><img src={{$val['avatar']}}/></td>
</tr>
@endforeach
</table>
</html>