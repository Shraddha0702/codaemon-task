<html>
@if(session('name'))
            <h3 style="color: green;">User {{session('name')}} has been added</h3>
        @endif
    <form action="flash1" method="post">
        @csrf
       
        <input type="text " name="name" placeholder="Enter name"><br><br>
        <input type="text" name="password" placeholder="Enter password"><br><br>
        <input type="text" name="email" placeholder="Enter email"><br><br>
        <button type="submit">Submit</button>
    </form>
</html>