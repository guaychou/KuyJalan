@extends('layouts.app')

@section('content')
@foreach($posts as $post)

<p>{{$post->caption}}</p>
<img src="{{ $post->default }}" alt="" srcset="">
<br>
@endforeach
@endsection
