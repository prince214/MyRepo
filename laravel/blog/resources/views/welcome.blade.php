@extends('layout')


@section('content')

<h1>LANGUAGES</h1>

<?php

// foreach ($lang as $languages) {
//     echo $languages;
// }

?>

@foreach ($lang as $languages) 
<p>
{{ $languages }}
</p>
@endforeach

@endsection


