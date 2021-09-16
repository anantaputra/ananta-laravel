<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Ananta Starna',
            'username' => 'starna-74',
            'email' => 'ananta@gmail.com',
            'password' => bcrypt('Anantap5')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(22)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolorem. Consequatur, officiis? Dolorem fugiat hic, esse tenetur temporibus illum officia laboriosam possimus soluta, modi totam rerum! Esse recusandae repudiandae eum consectetur, dolorem ad provident nulla quibusdam delectus?</p> <p>Illum maiores laudantium illo ratione possimus ut, distinctio ab tenetur voluptatem asperiores neque a quaerat quae perferendis! Quisquam cupiditate, aspernatur consequatur pariatur molestiae numquam officiis ipsa dolores vitae, autem iste magni ratione assumenda, repudiandae eligendi ducimus. Omnis sapiente possimus quam dignissimos eos corporis voluptatem explicabo voluptas tenetur minus commodi, voluptates nemo necessitatibus alias numquam cumque id fuga veniam! Hic quam facilis voluptatum ipsum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolorem. Consequatur, officiis? Dolorem fugiat hic, esse tenetur temporibus illum officia laboriosam possimus soluta, modi totam rerum! Esse recusandae repudiandae eum consectetur, dolorem ad provident nulla quibusdam delectus?</p> <p>Illum maiores laudantium illo ratione possimus ut, distinctio ab tenetur voluptatem asperiores neque a quaerat quae perferendis! Quisquam cupiditate, aspernatur consequatur pariatur molestiae numquam officiis ipsa dolores vitae, autem iste magni ratione assumenda, repudiandae eligendi ducimus. Omnis sapiente possimus quam dignissimos eos corporis voluptatem explicabo voluptas tenetur minus commodi, voluptates nemo necessitatibus alias numquam cumque id fuga veniam! Hic quam facilis voluptatum ipsum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolorem. Consequatur, officiis? Dolorem fugiat hic, esse tenetur temporibus illum officia laboriosam possimus soluta, modi totam rerum! Esse recusandae repudiandae eum consectetur, dolorem ad provident nulla quibusdam delectus?</p> <p>Illum maiores laudantium illo ratione possimus ut, distinctio ab tenetur voluptatem asperiores neque a quaerat quae perferendis! Quisquam cupiditate, aspernatur consequatur pariatur molestiae numquam officiis ipsa dolores vitae, autem iste magni ratione assumenda, repudiandae eligendi ducimus. Omnis sapiente possimus quam dignissimos eos corporis voluptatem explicabo voluptas tenetur minus commodi, voluptates nemo necessitatibus alias numquam cumque id fuga veniam! Hic quam facilis voluptatum ipsum.</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolorem. Consequatur, officiis? Dolorem fugiat hic, esse tenetur temporibus illum officia laboriosam possimus soluta, modi totam rerum! Esse recusandae repudiandae eum consectetur, dolorem ad provident nulla quibusdam delectus?</p> <p>Illum maiores laudantium illo ratione possimus ut, distinctio ab tenetur voluptatem asperiores neque a quaerat quae perferendis! Quisquam cupiditate, aspernatur consequatur pariatur molestiae numquam officiis ipsa dolores vitae, autem iste magni ratione assumenda, repudiandae eligendi ducimus. Omnis sapiente possimus quam dignissimos eos corporis voluptatem explicabo voluptas tenetur minus commodi, voluptates nemo necessitatibus alias numquam cumque id fuga veniam! Hic quam facilis voluptatum ipsum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum kelima',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolorem. Consequatur, officiis? Dolorem fugiat hic, esse tenetur temporibus illum officia laboriosam possimus soluta, modi totam rerum! Esse recusandae repudiandae eum consectetur, dolorem ad provident nulla quibusdam delectus?</p> <p>Illum maiores laudantium illo ratione possimus ut, distinctio ab tenetur voluptatem asperiores neque a quaerat quae perferendis! Quisquam cupiditate, aspernatur consequatur pariatur molestiae numquam officiis ipsa dolores vitae, autem iste magni ratione assumenda, repudiandae eligendi ducimus. Omnis sapiente possimus quam dignissimos eos corporis voluptatem explicabo voluptas tenetur minus commodi, voluptates nemo necessitatibus alias numquam cumque id fuga veniam! Hic quam facilis voluptatum ipsum.</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
