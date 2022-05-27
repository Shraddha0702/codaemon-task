<html>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        @foreach ($member as $val)
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['name']}}</td>
            <td><a href={{"delete/".$val['id']}}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</html>