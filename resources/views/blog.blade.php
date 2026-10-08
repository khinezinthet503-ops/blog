<x-layout>
<x-slot name='title'>
    <title>{{$blog->title}}</title>
</x-slot>
    <article>
        <!-- escape html tag. for user. -->
    <h1>   {{$blog->title}}</h1>
    <!-- for html tag, developer -->
    <p>{!!$blog->body!!}</p>
        <a href="/">goback</a>
    </article>
</x-layout>

