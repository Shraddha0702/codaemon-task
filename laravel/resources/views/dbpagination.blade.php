<h1>hi</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
    </tr>
    @foreach($member as $val)
    <tr>
        <td>{{$val['id']}}</td>
        <td>{{$val['name']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$member->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>