@extends('layouts.app')
@section('content')
<div style="margin-top: 50px;">

@foreach ($output as $out)
   <div>
        <img src="{{ asset($out->image) }}"><br/>
        {{$out->nama_tempat_wisata}}
        {{$out->name }}<br>
        {{$out->caption}}<br>
        {{$out->nama_kota}}<br>
        Like : {{$out->like}}<br>
   </div> 
    
@endforeach

</div>
@endsection