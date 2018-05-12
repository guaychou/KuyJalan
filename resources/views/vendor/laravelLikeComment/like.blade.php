@include('laravelLikeComment::like', ['like_item_id' => 'image_31'])
@extends('layouts.app')
@section('content')

<head>
<link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/icon.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/comment.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/form.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/button.min.css" rel="stylesheet">
    <link href="{{ asset('/vendor/laravelLikeComment/css/style.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('/vendor/laravelLikeComment/js/script.js') }}" type="text/javascript"></script>
	</head>
<?php
	$data = \risul\LaravelLikeComment\Controllers\LikeController::getLikeViewData($like_item_id);
?>
<div class="laravel-like">
	<i id="{{ $like_item_id }}-like"
	   class="icon {{ $data[$like_item_id.'likeDisabled'] }} {{ $data[$like_item_id.'likeIconOutlined'] }} laravelLike-icon thumbs up"
	   data-item-id="{{ $like_item_id }}"
	   data-vote="1">
    </i>
	<span id="{{ $like_item_id }}-total-like">{{ $data[$like_item_id.'total_like'] }}</span>
	<i id="{{ $like_item_id }}-dislike"
	   class="icon {{ $data[$like_item_id.'likeDisabled'] }} {{ $data[$like_item_id.'dislikeIconOutlined'] }} laravelLike-icon thumbs down"
	   data-item-id="{{ $like_item_id }}"
	   data-vote="-1">
   </i>
   <span id="{{ $like_item_id }}-total-dislike">{{ $data[$like_item_id.'total_dislike'] }}</span>
</div>

@endsection