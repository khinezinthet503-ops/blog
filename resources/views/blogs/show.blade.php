<x-layout>

    <!-- singloe blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs_zkrPQdsdn14bBpmrKOuC0hqdARhCmdcfLMeuhUCnw&s=10"
                    class="card-img-top" alt="..." />
                <h3 class="my-3">{{$blog->title}}</h3>
                <div>
                    <h5> <a href="/users/{{$blog->author->username}} ">Author-{{$blog->author->name}}</a></h5>
                    <div>
                        <a href="/categories/{{$blog->category->slug }} class=" text-decoration-none">
                            <span class="badge bg-primary text-white ">
                                {{ $blog->category->title }}
                            </span>
                        </a>
                    </div>
                    <p class="mt-3 text-secondary"> publish {{$blog->created_at->diffForHumans()}}</p>
                </div>
                <p class="lh-md">
                    {{ $blog->body }}
                </p>
            </div>
        </div>
    </div>

    <x-blog-subscribe />
    <x-blog-you-like :randomBlogs="$randomBlogs" />
</x-layout>