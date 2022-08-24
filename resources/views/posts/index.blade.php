@extends('layouts.app')

@section('content')
<div class="py-3"> 
    <h1>Listas dos posts</h1>
</div>

@foreach($posts as $post)
<a href="{{route('showPost', $post->id)}}">
{{$post->title}} ({{$post->comments->count()}})
</a>
<hr>

@endforeach
{!! $posts->links()!!}

@endsection