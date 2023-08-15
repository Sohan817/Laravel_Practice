<h1>Users Login</h1>
<form action="users" method = "POST">
    @csrf
    <input type="text" name="username" placeholder = "Enter user Id"> <br><br>
    <input type="password" name = "password" placeholder = "Enter Password" ><br><br>
    <button type= "submit">Login</button>
</form>