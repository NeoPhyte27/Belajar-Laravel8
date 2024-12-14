<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        User::create([
            'name' => 'Aldirisky Pratama',
            'username' => 'aldiriskypratama',
            'email' => 'aldijinkpro27@gmail.com',
            'password' => bcrypt('Kiteng2723')
        ]);

        // User::create([
        //     'name' => 'Rindu Indah Villa Sari',
        //     'email' => 'rinduindah2002@gmail.com',
        //     'password' => bcrypt('Kiteng2723')
        // ]);

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
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores. Ab consequuntur adipisci commodi iure necessitatibus, doloremque laboriosam expedita <q>vitae beatae? Totamrepudiandae quasi</q> reiciendis maxime possimus iure quo odio cumque eveniet illum harum provident assumenda asperioressapiente aliquam,</p><p> quod molestias voluptas, aperiam similique beatae? Natus dignissimos reiciendis obcaecati sapiente voluptates.Praesentium cumque culpa asperiores necessitatibus voluptatibus, illum vitae debitis inventore, ab quaerat aliquamhic facere esse dolore consequuntur voluptate in aut at tempore. Asperiores rem esse soluta dolorum eum beatae,optio molestiae iste enim id! Odio, officia? Odio unde iure ducimus blanditiis tempora. Magni doloribus hic quisquam consectetur unde eveniet quis</p><p> earum corrupti illo aliquam voluptates, doloremque accusamus ut provident adipisci, quos, rerum suscipit obcaecati. Quos accusamus est, ipsam quo iste explicabo deserunt rem excepturi quia alias quidem saepe quisquam unde dicta in doloribus ea beatae eveniet mollitia at. Tempore eos eligendi exercitationem amet quidem fugit odio itaque iusto voluptate officia at corporis ipsa temporibus nostrum reiciendis sit, accusantium rerum architecto quaerat suscipit  qui unde? Odio totam ratione</p><p> voluptatem! Saepe laboriosam sapiente, quos alias tenetur amet esse, ea nihil, qui culpa rerum beatae? Tenetur praesentium rem voluptatem blanditiis laborum excepturi repellat qui odit ad, eveniet, tempora temporibus consequatur modi provident exercitationem eos aspernatur quia animi explicabo aperiam dolores. Amet omnis similique doloremque, nisi repellendus nam dolore eaque ducimus ex, quia nobis laborum modi veniam, deleniti atque ad voluptatem eligendi vel minus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores. Ab consequuntur adipisci commodi iure necessitatibus, doloremque laboriosam expedita <q>vitae beatae? Totamrepudiandae quasi</q> reiciendis maxime possimus iure quo odio cumque eveniet illum harum provident assumenda asperioressapiente aliquam,</p><p> quod molestias voluptas, aperiam similique beatae? Natus dignissimos reiciendis obcaecati sapiente voluptates.Praesentium cumque culpa asperiores necessitatibus voluptatibus, illum vitae debitis inventore, ab quaerat aliquamhic facere esse dolore consequuntur voluptate in aut at tempore. Asperiores rem esse soluta dolorum eum beatae,optio molestiae iste enim id! Odio, officia? Odio unde iure ducimus blanditiis tempora. Magni doloribus hic quisquam consectetur unde eveniet quis</p><p> earum corrupti illo aliquam voluptates, doloremque accusamus ut provident adipisci, quos, rerum suscipit obcaecati. Quos accusamus est, ipsam quo iste explicabo deserunt rem excepturi quia alias quidem saepe quisquam unde dicta in doloribus ea beatae eveniet mollitia at. Tempore eos eligendi exercitationem amet quidem fugit odio itaque iusto voluptate officia at corporis ipsa temporibus nostrum reiciendis sit, accusantium rerum architecto quaerat suscipit  qui unde? Odio totam ratione</p><p> voluptatem! Saepe laboriosam sapiente, quos alias tenetur amet esse, ea nihil, qui culpa rerum beatae? Tenetur praesentium rem voluptatem blanditiis laborum excepturi repellat qui odit ad, eveniet, tempora temporibus consequatur modi provident exercitationem eos aspernatur quia animi explicabo aperiam dolores. Amet omnis similique doloremque, nisi repellendus nam dolore eaque ducimus ex, quia nobis laborum modi veniam, deleniti atque ad voluptatem eligendi vel minus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores. Ab consequuntur adipisci commodi iure necessitatibus, doloremque laboriosam expedita <q>vitae beatae? Totamrepudiandae quasi</q> reiciendis maxime possimus iure quo odio cumque eveniet illum harum provident assumenda asperioressapiente aliquam,</p><p> quod molestias voluptas, aperiam similique beatae? Natus dignissimos reiciendis obcaecati sapiente voluptates.Praesentium cumque culpa asperiores necessitatibus voluptatibus, illum vitae debitis inventore, ab quaerat aliquamhic facere esse dolore consequuntur voluptate in aut at tempore. Asperiores rem esse soluta dolorum eum beatae,optio molestiae iste enim id! Odio, officia? Odio unde iure ducimus blanditiis tempora. Magni doloribus hic quisquam consectetur unde eveniet quis</p><p> earum corrupti illo aliquam voluptates, doloremque accusamus ut provident adipisci, quos, rerum suscipit obcaecati. Quos accusamus est, ipsam quo iste explicabo deserunt rem excepturi quia alias quidem saepe quisquam unde dicta in doloribus ea beatae eveniet mollitia at. Tempore eos eligendi exercitationem amet quidem fugit odio itaque iusto voluptate officia at corporis ipsa temporibus nostrum reiciendis sit, accusantium rerum architecto quaerat suscipit  qui unde? Odio totam ratione</p><p> voluptatem! Saepe laboriosam sapiente, quos alias tenetur amet esse, ea nihil, qui culpa rerum beatae? Tenetur praesentium rem voluptatem blanditiis laborum excepturi repellat qui odit ad, eveniet, tempora temporibus consequatur modi provident exercitationem eos aspernatur quia animi explicabo aperiam dolores. Amet omnis similique doloremque, nisi repellendus nam dolore eaque ducimus ex, quia nobis laborum modi veniam, deleniti atque ad voluptatem eligendi vel minus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nam distinctio ex quas accusamuslaudantium necessitatibus temporibus, nisi beatae! Veritatis doloribus facere, hic impedit excepturi amet velitasperiores. Ab consequuntur adipisci commodi iure necessitatibus, doloremque laboriosam expedita <q>vitae beatae? Totamrepudiandae quasi</q> reiciendis maxime possimus iure quo odio cumque eveniet illum harum provident assumenda asperioressapiente aliquam,</p><p> quod molestias voluptas, aperiam similique beatae? Natus dignissimos reiciendis obcaecati sapiente voluptates.Praesentium cumque culpa asperiores necessitatibus voluptatibus, illum vitae debitis inventore, ab quaerat aliquamhic facere esse dolore consequuntur voluptate in aut at tempore. Asperiores rem esse soluta dolorum eum beatae,optio molestiae iste enim id! Odio, officia? Odio unde iure ducimus blanditiis tempora. Magni doloribus hic quisquam consectetur unde eveniet quis</p><p> earum corrupti illo aliquam voluptates, doloremque accusamus ut provident adipisci, quos, rerum suscipit obcaecati. Quos accusamus est, ipsam quo iste explicabo deserunt rem excepturi quia alias quidem saepe quisquam unde dicta in doloribus ea beatae eveniet mollitia at. Tempore eos eligendi exercitationem amet quidem fugit odio itaque iusto voluptate officia at corporis ipsa temporibus nostrum reiciendis sit, accusantium rerum architecto quaerat suscipit  qui unde? Odio totam ratione</p><p> voluptatem! Saepe laboriosam sapiente, quos alias tenetur amet esse, ea nihil, qui culpa rerum beatae? Tenetur praesentium rem voluptatem blanditiis laborum excepturi repellat qui odit ad, eveniet, tempora temporibus consequatur modi provident exercitationem eos aspernatur quia animi explicabo aperiam dolores. Amet omnis similique doloremque, nisi repellendus nam dolore eaque ducimus ex, quia nobis laborum modi veniam, deleniti atque ad voluptatem eligendi vel minus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
