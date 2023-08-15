<h1>Outer Page</h1>
@include('Inner')

@csrf
<script>
  var data = @json($users);
  console.log(data)
</script>