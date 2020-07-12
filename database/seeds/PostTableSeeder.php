<?php

use App\Tag;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
           'name' => 'News',
        ]);

        $category2 = Category::create([
            'name' => 'Marketing',
        ]);

        $category3 = Category::create([
            'name' => 'Partnership',
        ]);

        $author1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@doe.com',
            'password' => Hash::make('password')
        ]);

        $post1 = $author1->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'First description',
            'contents' => 'First content',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Second description',
            'contents' => 'Second content',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',

        ]);

        $post3 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Third description',
            'contents' => 'Third content',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',

        ]);

        $post4 = $author1->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Fourth description',
            'contents' => 'Fourth content',
            'category_id' => $category1->id,
            'image' => 'posts/4.jpg',

        ]);

        $tag1 = Tag::create([
            'name' => 'job',
        ]);

        $tag2 = Tag::create([
            'name' => 'customers',
        ]);

        $tag3 = Tag::create([
            'name' => 'records',
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);

    }
}
