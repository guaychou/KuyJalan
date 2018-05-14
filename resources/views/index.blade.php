@extends('layouts.app')
@section('content')
<div style="margin-top: 50px;">

@foreach ($posts as $post)
   <div>
        <img src="{{ asset($post->image) }}"><br/>
        {{ $post->caption }}
   </div> 
    
@endforeach

</div>
@endsection