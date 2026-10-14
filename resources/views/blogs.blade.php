
<x-layout>

    <x-hero/>
    <x-section :blogs="$blogs" :categories="$categories"
    :currentCategory="$currentCategory ?? null"/>
    <!-- $currentCategory ? $currentCategory :null -->
    <x-blog-subscribe/>

    
 
</x-layout>




