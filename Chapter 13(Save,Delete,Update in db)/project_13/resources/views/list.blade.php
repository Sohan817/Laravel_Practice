<h1>Member List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Add Member</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td> <a href="/add">Add</a></td>
        <td> <a href="delete/{{$member['id']}}">Delete</a></td>
        <td> <a href="edit/{{$member['id']}}">Edit</a></td>
    </tr>
    @endforeach
</table>