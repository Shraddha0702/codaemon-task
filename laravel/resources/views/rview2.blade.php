<h3>
@foreach ($name as $val)
{{$val}}

@endforeach
</h3>
<?php
echo "hi";
?>

<script>
var a=@json($name);
console.log(a);
</script>