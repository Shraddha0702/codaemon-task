<html>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td colspan="2">Action</td>
        </tr>
        @foreach($member as $val)
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['name']}}</td>
            <td><a href="delete1\{{$val['id']}}">Delete</a></td>
            <td><a href="update\{{$val['id']}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</html>