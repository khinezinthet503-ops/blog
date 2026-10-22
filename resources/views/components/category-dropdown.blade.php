       <div class="dropdown">
           <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ isset($currentCategory) ? $currentCategory->title : "Filter By Category"  }}
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="/">
                   All</a>
               @foreach ( $categories as $category )
               <a class="dropdown-item"
                   href="/?category={{$category->slug}}{{request('search')?'&search='.request('search') :''}}{{request('username')? '&username='.request('username'):''}}">
                   {{$category->title}}</a>
               @endforeach


           </div>
       </div>