@extends('layouts.app')

@section('content')
@foreach($posts as $post)

<p>{{$post->caption}}</p>
<img src="storage/{{$post->image}}"alt="">
<br>
@endforeach
@endsection
