<h1>Add Member</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="id" placeholder="Enter a Id"><br><br>
    <input type="text" name="name" placeholder="Enter a Name"><br><br>
    <input type="text" name="email" placeholder="Enter a Email"><br><br>
    <input type="text" name="address" placeholder="Enter a Address"><br><br>
    <button tyle="submit">Add Member</button>
</form>