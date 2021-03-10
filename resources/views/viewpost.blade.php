<h1>post</h1>
@foreach ($post as $p)
<h2>{{$p->title}}</h2>
{{-- <h2>{{$p->id}}</h2> --}}


<a href="{{route('like',$p->id)}}">Like ({{$likecount}})</a>
<a href="{{route('dislike',$p->id)}}">Dislike ({{$dislikecount}})</a><br>

@endforeach