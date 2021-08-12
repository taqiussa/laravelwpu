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
        // \App\Models\User::factory(10)->create();
        // User::create([
            //     'name' => 'Taqius ',
            //     'email' => 'taqius@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
            //     'name' => 'arga ',
        //     'email' => 'arga@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo perferendis aut tenetur quod nesciunt ipsam, eos incidunt eius id velit cupiditate, soluta inventore nulla rerum consequuntur sequi voluptas voluptatem architecto earum deleniti! Sunt hic quibusdam mollitia error sequi quaerat atque, iure repudiandae repellendus iusto quae numquam eligendi doloribus assumenda eum officia laboriosam? Debitis quidem, eum in fugit, tempore quis assumenda suscipit laborum totam perferendis quisquam harum delectus! Voluptatum sapiente ipsa, voluptas earum iure ex natus dicta ipsum debitis, facilis sunt quo odio, dolores dolor. Veniam quaerat recusandae alias, tempora rem ut molestias facilis. Blanditiis amet aliquid beatae ipsum reiciendis dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo perferendis aut tenetur quod nesciunt ipsam, eos incidunt eius id velit cupiditate, soluta inventore nulla rerum consequuntur sequi voluptas voluptatem architecto earum deleniti! Sunt hic quibusdam mollitia error sequi quaerat atque, iure repudiandae repellendus iusto quae numquam eligendi doloribus assumenda eum officia laboriosam? Debitis quidem, eum in fugit, tempore quis assumenda suscipit laborum totam perferendis quisquam harum delectus! Voluptatum sapiente ipsa, voluptas earum iure ex natus dicta ipsum debitis, facilis sunt quo odio, dolores dolor. Veniam quaerat recusandae alias, tempora rem ut molestias facilis. Blanditiis amet aliquid beatae ipsum reiciendis dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo perferendis aut tenetur quod nesciunt ipsam, eos incidunt eius id velit cupiditate, soluta inventore nulla rerum consequuntur sequi voluptas voluptatem architecto earum deleniti! Sunt hic quibusdam mollitia error sequi quaerat atque, iure repudiandae repellendus iusto quae numquam eligendi doloribus assumenda eum officia laboriosam? Debitis quidem, eum in fugit, tempore quis assumenda suscipit laborum totam perferendis quisquam harum delectus! Voluptatum sapiente ipsa, voluptas earum iure ex natus dicta ipsum debitis, facilis sunt quo odio, dolores dolor. Veniam quaerat recusandae alias, tempora rem ut molestias facilis. Blanditiis amet aliquid beatae ipsum reiciendis dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo perferendis aut tenetur quod nesciunt ipsam, eos incidunt eius id velit cupiditate, soluta inventore nulla rerum consequuntur sequi voluptas voluptatem architecto earum deleniti! Sunt hic quibusdam mollitia error sequi quaerat atque, iure repudiandae repellendus iusto quae numquam eligendi doloribus assumenda eum officia laboriosam? Debitis quidem, eum in fugit, tempore quis assumenda suscipit laborum totam perferendis quisquam harum delectus! Voluptatum sapiente ipsa, voluptas earum iure ex natus dicta ipsum debitis, facilis sunt quo odio, dolores dolor. Veniam quaerat recusandae alias, tempora rem ut molestias facilis. Blanditiis amet aliquid beatae ipsum reiciendis dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
