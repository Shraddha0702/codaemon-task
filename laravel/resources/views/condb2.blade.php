<html>
    <form action="condb2url" method="post" >
        {{method_field('PUT')}}
    @csrf
        <h4>
       Enter name:
        <input type="text" name="name" placeholder="Enter name"/><br><br>
        Enter password:
        <input type="text" name="password" placeholder="Enter password"/><br><br>
        <button type="submit">Login</button><br>
        </h4>
    </form>
</html>