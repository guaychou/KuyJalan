@extends('layouts.app')
@section('content')
<div style="margin-top: 50px;">

@foreach ($output as $out)
<div class="ui centered card">
  <div class="content">
    <span class="floated meta">{{$out->nama_tempat_wisata}}</span>
    <div class="right floated meta">{{$out->nama_kota}}</div>
    <br>
    <img class="ui avatar image" src="{{asset($out->image) }}"> {{$out->name }}
  </div>
  <div class="image" >
    <img src="{{asset($out->image) }}">
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      {{$out->like}} likes
    </span>
    
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      
      <div class="description">
      {{$out->caption}}
    </div>
    </div>
  </div>
</div>
    
@endforeach

</div>
@endsection