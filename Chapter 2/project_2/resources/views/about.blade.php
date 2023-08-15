<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center">
    <h1>About Page</h1>
      <!-- current URL
      {{URL::current()}} -->
        <!-- full URL -->
        <!-- {{URL::full()}} -->
        <h1>{{URL::previous()}}</h1>
        <a href="{{URL::to('/home')}}">Home</a> <br>
        <a href="{{URL::to('/')}}">Welcome</a>
</div>
</body>
</html>