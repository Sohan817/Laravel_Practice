<h1>Login Page</h1>
<form action="session" method = "POST">
    @csrf
    <input type="text" name="user" placeholder="Enter a User Name"><br><br>
    <input type="password" name="password" placeholder="Enter a Password"><br><br>
    <button type="submit">Login</button>
</form>