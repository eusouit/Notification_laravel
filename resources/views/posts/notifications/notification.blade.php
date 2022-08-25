@extends('layouts.app')

@section('content')
@foreach($user as $key)
@foreach($key->notifications as $notification)
{{$notification->data['comment']['title']}} <a href="route('markAsRead')">marcar como lido </a>
@endforeach
@endforeach
@endsection