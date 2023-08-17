<h1>Add New Users</h1>
@if(session('user'))
<h3>Data Saved for {{session('user')}}</h3>
@endif
<form action="storeusers" method = "POST">
    @csrf
    <input type="text" name="user" placeholder="Enter a Name"><br><br>
    <input type="email" name="email" placeholder="Enter a Email"><br><br>
    <input type="password" name="password" placeholder="Enter a Password"><br><br>
    <button type="submit">Add</button>
</form>