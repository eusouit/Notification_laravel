<hr>
<div class="form-group">
    @if(auth()->check())
    <form action="{{route('store')}}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titulo</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
        </div>
        <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    @else
    <p>Precisa esta logado <a href="{{route('login')}}">clique aqui para logar </a> </p>
    @endif

    <h3>Comentários ({{$post->comments->count()}})</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post->comments as $comment)
            <tr>
                <th scope="row">{{$comment->id}}</th>
                <td>{{$comment->title}}</td>
                <td>{{$comment->body}}</td>
                <td>{{$comment->user->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>