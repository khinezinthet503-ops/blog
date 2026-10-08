<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();
      
       $frontend= Category::factory()->create(['title'=>'frontend']);
       $backend=Category::factory()->create(['title'=>'backend']);
       Blog::factory(2)->create(['category_id'=>$frontend->id]);
       Blog::factory(2)->create(['category_id'=>$backend->id]);
    }
}
