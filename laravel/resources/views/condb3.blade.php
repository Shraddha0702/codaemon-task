<html>
    <h1>hi</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
        </tr>
        @foreach($member as $val)
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['name']}}</td>
            <td>{{$val['address']}}</td>
        </tr>
        @endforeach

       
    </table>
</html>