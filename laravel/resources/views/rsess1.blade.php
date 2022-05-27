<html>
    <form action="rsess" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter name"><br><br>
        <input type="text" name="password" placeholder="enter password"><br><br>
        <button type="submit">Login</button>
    </form>
</html>