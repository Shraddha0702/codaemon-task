<h1>blade template {{count($name)}}</h1>
{{10+2}}
@if(count($name)==2)
<h3>welcome</h3>
@endif

@for($i=1;$i<11;$i++)
<h4>{{$i}}</h4>
@endfor

