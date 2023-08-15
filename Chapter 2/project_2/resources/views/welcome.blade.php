<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center">
    <h1>Welcome Page</h1>
    <h1>{{URL::previous()}}</h1>
    <a href="{{URL::to('/about')}}">About</a> <br>
    <a href="{{URL::to('/home')}}">Home</a>
    <!-- current URL-->
    <!-- {{URL::current()}} -->
    <!-- full URL -->
    <!-- {{URL::full()}} -->
    <form action="{{URL::to('save Data')}}">
        <input type="text" placeholder = "Enter a Name">
    </form>
</div>
</body>
</html>