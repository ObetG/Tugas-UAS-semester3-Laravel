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

        User::create([
            'name' => 'Mustofa Firdaus',
            'username' => 'mustofafirdaus',
            'email' => 'mustofa@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Muhammad David',
        //     'email' => 'david123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae, eius facere ad? Facilis molestias ex, non eos molestiae nesciunt ab mollitia doloribus, sapiente quisquam culpa? Modi numquam, dolor laborum officia velit neque praesentium doloribus quibusdam nisi rem tempora beatae expedita quam. Asperiores, veniam officiis! Magni quia excepturi cum commodi, hic culpa reprehenderit pariatur assumenda tempore saepe minima nisi enim suscipit incidunt temporibus maxime! Dolor placeat nihil quidem reiciendis ab odio totam iure repudiandae aperiam repellat, soluta at sed nesciunt rem quam iusto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae, eius facere ad? Facilis molestias ex, non eos molestiae nesciunt ab mollitia doloribus, sapiente quisquam culpa? Modi numquam, dolor laborum officia velit neque praesentium doloribus quibusdam nisi rem tempora beatae expedita quam. Asperiores, veniam officiis! Magni quia excepturi cum commodi, hic culpa reprehenderit pariatur assumenda tempore saepe minima nisi enim suscipit incidunt temporibus maxime! Dolor placeat nihil quidem reiciendis ab odio totam iure repudiandae aperiam repellat, soluta at sed nesciunt rem quam iusto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae, eius facere ad? Facilis molestias ex, non eos molestiae nesciunt ab mollitia doloribus, sapiente quisquam culpa? Modi numquam, dolor laborum officia velit neque praesentium doloribus quibusdam nisi rem tempora beatae expedita quam. Asperiores, veniam officiis! Magni quia excepturi cum commodi, hic culpa reprehenderit pariatur assumenda tempore saepe minima nisi enim suscipit incidunt temporibus maxime! Dolor placeat nihil quidem reiciendis ab odio totam iure repudiandae aperiam repellat, soluta at sed nesciunt rem quam iusto!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi voluptas dicta ea exercitationem non distinctio voluptatem obcaecati, veniam temporibus dolorum error in quae quo ut vitae, eius facere ad? Facilis molestias ex, non eos molestiae nesciunt ab mollitia doloribus, sapiente quisquam culpa? Modi numquam, dolor laborum officia velit neque praesentium doloribus quibusdam nisi rem tempora beatae expedita quam. Asperiores, veniam officiis! Magni quia excepturi cum commodi, hic culpa reprehenderit pariatur assumenda tempore saepe minima nisi enim suscipit incidunt temporibus maxime! Dolor placeat nihil quidem reiciendis ab odio totam iure repudiandae aperiam repellat, soluta at sed nesciunt rem quam iusto!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        
    }
}
