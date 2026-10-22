@props(['blog'])
<div class="card h-100">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs_zkrPQdsdn14bBpmrKOuC0hqdARhCmdcfLMeuhUCnw&s=10"
        class="card-img-top" alt="..." />
    <div class="card-body">
        <h3 class="card-title">{{$blog->title}}</h3>
        <p class="fs-6 text-secondary">
            <a href="/?username={{$blog->author->username}} "> {{ $blog->author->name   }}</a>
            <span> {{$blog->created_at->diffForHumans()}}</span>
        </p>
        <div class="tags my-3">
            <a href="/?category={{$blog->category->slug }}" class=" text-decoration-none">
                <span class="badge bg-primary text-white ">
                    {{ $blog->category->title }}
                </span>
            </a>

        </div>
        <p class="card-text">
            {{ $blog->intro }}
        </p>
        <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
    </div>
</div>