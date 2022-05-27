@include('header_blade')
@include('blade_include')

@foreach($user as $j)
<h4>{{$j}}</h4>
@endforeach


<script>
    var data=@json($user);
    console.warn(data);
    
</script>