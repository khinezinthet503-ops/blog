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
      
       $frontend= Category::factory()->create(['title'=>'frontend','slug'=>'frontend']);
       $backend=Category::factory()->create(['title'=>'backend','slug'=> 'backend']);
       $mgmg=User::factory()->create(['name'=> 'MgMg','username'=> 'mgmg']);
       $aungaung=User::factory()->create(['name'=> 'AungAung','username'=>"aungaung"] );

       Blog::factory(2)->create(['category_id'=>$frontend->id,'user_id'=> $mgmg->id]);
       Blog::factory(2)->create(['category_id'=>$backend->id,'user_id'=> $aungaung->id]);
    }
}