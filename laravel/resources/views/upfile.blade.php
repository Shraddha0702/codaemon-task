<html>
    <form action="uploadfile" method="post">
        @csrf
        <input type="file" name="file1" ><br><br>
        <button type="submit">submit</button>
    </form>
</html>