@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css">
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"/>
<body>
<div class="ui grid" style="margin-top: 43px">
  
  <div class="four wide column" style="background-color: white">

    <div class="ui centered card">
  <div class="image">
    <img src="/images/foto.jpg">
  </div>
  <div class="content">
    <a class="header">{{ Auth::user()->name }}</a>
    
      <div class="post">
        <div class="ui blue button">
    <i class="pointing icon"></i> Point
  </div>
  <a class="ui basic left pointing blue label">
    @foreach ($user as $a)
{{$a->point}}
@endforeach
  </a>
</div> 
      <div class="post">
        <div class="ui button">
    <i class="pointing icon"></i> Post
  </div>
  <a class="ui basic left pointing blue label">
  {{$count}}
  </a>
</div> 

  </div>
</div>

  </div>


  <div class="twelve wide column" style="background-color: grey">
    
      <div class="ui centered card" style="width: 600px">
  <div class="content">
    <div class="right floated meta">14h</div>
    <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
  </div>
  <div class="image">
    <img>
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
    <i class="comment icon"></i>
    3 comments
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      <i class="heart outline icon"></i>
      <input type="text" placeholder="Add Comment...">
    </div>
  </div>
</div>

<div class="ui centered card" style="width: 600px">
  <div class="content">
    <div class="right floated meta">14h</div>
    <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
  </div>
  <div class="image">
    <img>
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
    <i class="comment icon"></i>
    3 comments
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      <i class="heart outline icon"></i>
      <input type="text" placeholder="Add Comment...">
    </div>
  </div>
</div>
<div class="ui centered card" style="width: 600px">
  <div class="content">
    <div class="right floated meta">14h</div>
    <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
  </div>
  <div class="image">
    <img>
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
    <i class="comment icon"></i>
    3 comments
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      <i class="heart outline icon"></i>
      <input type="text" placeholder="Add Comment...">
    </div>
  </div>
</div>
<div class="ui centered card" style="width: 600px">
  <div class="content">
    <div class="right floated meta">14h</div>
    <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
  </div>
  <div class="image">
    <img>
  </div>
  <div class="content">
    <span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
    <i class="comment icon"></i>
    3 comments
  </div>
  <div class="extra content">
    <div class="ui large transparent left icon input">
      <i class="heart outline icon"></i>
      <input type="text" placeholder="Add Comment...">
    </div>
  </div>
</div>

 @foreach ($user as $out)
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

  
  
</body>
    

</html>
@endsection