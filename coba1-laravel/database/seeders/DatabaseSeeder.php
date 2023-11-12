<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User:: create([
        //     'name' => 'Ahmad Saepul Rahman',
        //     'email' => 'ahmadsaepul208@gmail.com',
        //     'password' => bcrypt ('12345')
        // ]);

        
        // User:: create([
        //     'name' => 'Mawar Bodas',
        //     'email' => 'mawarbodas@gmail.com',
        //     'password' => bcrypt ('12345')
        // ]);

         User::factory(3)->create();

         Category::create([
             'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

         Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' =>'Judul Pertama',
        //     'slug' =>'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque? Exercitationem quos autem ipsa, explicabo maiores pariatur sequi fugiat, aperiam asperiores nemo molestias illum dicta tempora hic facere eos minima.</p><p> Reprehenderit dolores quaerat tempore praesentium at, porro alias tempora, molestiae eveniet eos placeat dolor recusandae pariatur fugiat, vel quo ex harum voluptatibus ipsum! Molestiae atque, doloremque numquam non cumque quam ab? Fugit odio excepturi reprehenderit quis fuga accusantium cupiditate quas consectetur voluptatibus illum, alias maiores.</p><p> laboriosam inventore eveniet praesentium eum reiciendis ducimus eaque illo nulla dolorem? Odit exercitationem fugiat quis aperiam officiis tenetur quia maiores, harum magnam molestias doloribus ut mollitia totam cupiditate minima at impedit, libero placeat fugit ratione magni sapiente. Nihil itaque ducimus sapiente sit porro blanditiis eveniet doloremque, fugit voluptas nesciunt natus nisi? Pariatur voluptatem, illum dolores blanditiis repellendus soluta autem.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Kedua',
        //     'slug' =>'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque? Exercitationem quos autem ipsa, explicabo maiores pariatur sequi fugiat, aperiam asperiores nemo molestias illum dicta tempora hic facere eos minima.</p><p> Reprehenderit dolores quaerat tempore praesentium at, porro alias tempora, molestiae eveniet eos placeat dolor recusandae pariatur fugiat, vel quo ex harum voluptatibus ipsum! Molestiae atque, doloremque numquam non cumque quam ab? Fugit odio excepturi reprehenderit quis fuga accusantium cupiditate quas consectetur voluptatibus illum, alias maiores.</p><p> laboriosam inventore eveniet praesentium eum reiciendis ducimus eaque illo nulla dolorem? Odit exercitationem fugiat quis aperiam officiis tenetur quia maiores, harum magnam molestias doloribus ut mollitia totam cupiditate minima at impedit, libero placeat fugit ratione magni sapiente. Nihil itaque ducimus sapiente sit porro blanditiis eveniet doloremque, fugit voluptas nesciunt natus nisi? Pariatur voluptatem, illum dolores blanditiis repellendus soluta autem.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul ketiga',
        //     'slug' =>'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque? Exercitationem quos autem ipsa, explicabo maiores pariatur sequi fugiat, aperiam asperiores nemo molestias illum dicta tempora hic facere eos minima.</p><p> Reprehenderit dolores quaerat tempore praesentium at, porro alias tempora, molestiae eveniet eos placeat dolor recusandae pariatur fugiat, vel quo ex harum voluptatibus ipsum! Molestiae atque, doloremque numquam non cumque quam ab? Fugit odio excepturi reprehenderit quis fuga accusantium cupiditate quas consectetur voluptatibus illum, alias maiores.</p><p> laboriosam inventore eveniet praesentium eum reiciendis ducimus eaque illo nulla dolorem? Odit exercitationem fugiat quis aperiam officiis tenetur quia maiores, harum magnam molestias doloribus ut mollitia totam cupiditate minima at impedit, libero placeat fugit ratione magni sapiente. Nihil itaque ducimus sapiente sit porro blanditiis eveniet doloremque, fugit voluptas nesciunt natus nisi? Pariatur voluptatem, illum dolores blanditiis repellendus soluta autem.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' =>'Judul keempat',
        //     'slug' =>'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, aliquid voluptatibus quos minus commodi sint unde alias illo pariatur, ratione accusantium, neque impedit voluptate repellendus doloremque? Exercitationem quos autem ipsa, explicabo maiores pariatur sequi fugiat, aperiam asperiores nemo molestias illum dicta tempora hic facere eos minima.</p><p> Reprehenderit dolores quaerat tempore praesentium at, porro alias tempora, molestiae eveniet eos placeat dolor recusandae pariatur fugiat, vel quo ex harum voluptatibus ipsum! Molestiae atque, doloremque numquam non cumque quam ab? Fugit odio excepturi reprehenderit quis fuga accusantium cupiditate quas consectetur voluptatibus illum, alias maiores.</p><p> laboriosam inventore eveniet praesentium eum reiciendis ducimus eaque illo nulla dolorem? Odit exercitationem fugiat quis aperiam officiis tenetur quia maiores, harum magnam molestias doloribus ut mollitia totam cupiditate minima at impedit, libero placeat fugit ratione magni sapiente. Nihil itaque ducimus sapiente sit porro blanditiis eveniet doloremque, fugit voluptas nesciunt natus nisi? Pariatur voluptatem, illum dolores blanditiis repellendus soluta autem.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
