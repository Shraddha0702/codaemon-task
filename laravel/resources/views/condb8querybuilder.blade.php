<table border="1">
@foreach($member as $val)
<tr>
    <td>{{$val->id}}</td>
    <td>{{$val->name}}</td>
</tr>
@endforeach
</table>