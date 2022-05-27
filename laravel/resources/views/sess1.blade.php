<html>
    <form action="session1" method="post">
   
        @csrf
        Enter name:
        <input type="text" name="name">
        <br><br>
        Enter password
        <input type="text" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
</html>