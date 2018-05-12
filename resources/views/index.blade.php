@extends('layouts.app')

@section('content')
@foreach($posts as $post)

<p>{{$post->caption}} Like = {{$post->like}} </p><br>
<img src="{{ $post->image }}" alt="" srcset="">
<br>
@endforeach
@endsection
