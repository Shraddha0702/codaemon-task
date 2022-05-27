<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    Name:
    <input type="text" name="name" value={{$data['name']}}>
    <button type="submit">Update</button>
</form>