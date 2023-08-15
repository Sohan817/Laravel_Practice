<h1>Users Page</h1>
<h2>Hello {{$name}}</h2>
<!-- if-else statement -->
@if($name == 'Shohan')
<h1>Hi {{$name}}</h1>
@elseif($name == 'Suborna')
<h1>Hi {{$name}}</h1>
@else
<h1>Hi Unknown</h1>
@endif
<!-- for loop -->
@for($i=0; $i<10; $i++)
<h4>{{$i}}<h4>
@endfor -->
<!-- for-each 
@foreach($users as $name)
<h3>{{$name}}</h3>
@endforeach