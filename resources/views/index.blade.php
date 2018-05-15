@extends('layouts.app')
@section('content')
<div style="margin-top: 50px;">

<<<<<<< HEAD
@foreach ($output as $out)
<div class="ui centered card">
  <div class="content">
  <img class="ui avatar image" src="{{asset($out->image) }}"> {{$out->name }}
  <br>
    <span class="floated meta">{{$out->nama_tempat_wisata}}</span>
    <div class="right floated meta">{{$out->nama_kota}}</div>
  </div>
  <div class="image" >
    <img src="{{asset($out->image) }}">
=======
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
>>>>>>> e5b5491e17e7197ad9f697df9f0335109406162b
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
<<<<<<< HEAD
      {{$out->like}} likes
=======
      17 likes
>>>>>>> e5b5491e17e7197ad9f697df9f0335109406162b
    </span>
    
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
<<<<<<< HEAD
      
      <div class="description">
      {{$out->caption}}
    </div>
    </div>
  </div>
</div>
    
=======
      <i class="heart outline icon"></i>
      <input placeholder="Add Comment..." type="text">
    </div>
  </div>
</div>
>>>>>>> e5b5491e17e7197ad9f697df9f0335109406162b
@endforeach

</div>
@endsection