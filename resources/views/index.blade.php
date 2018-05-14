@extends('layouts.app')

@section('content')
@foreach($posts as $post)

<p>{{$post->caption}}</p>
<img src="{{ $post->default }}" alt="" srcset="">
<br>

<div class="ui card">
  <div class="content">
    <div class="right floated meta">14h</div>
    <img class="ui avatar image" src="/public/images/logo.jpg"> Elliot
  </div>
  <div class="image">
    <img src="/public/images/logo.jpg">
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
    
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      <i class="heart outline icon"></i>
      <input placeholder="Add Comment..." type="text">
    </div>
  </div>
</div>
@endforeach
@endsection
