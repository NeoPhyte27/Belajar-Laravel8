<?php

namespace App\Models;

class Post_
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul_post_pertama',
            'author' => 'Aldirisky Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum doloremque eveniet at, ad nostrum dignissimos. Voluptatum maxime blanditiis corrupti, vero eos voluptatibus magnam ut repudiandae aut laboriosam culpa praesentium quos vitae numquam saepe id neque exercitationem. Magnam, inventore porro reiciendis accusantium quisquam aspernatur hic delectus rerum blanditiis quaerat sed dicta non aperiam saepe consectetur facere, perferendis sunt neque natus. A eaque, sed error nihil doloremque harum voluptas voluptatibus eveniet dicta fugiat aut officiis, natus repellat dolor voluptatem nostrum distinctio vero.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul_post_kedua',
            'author' => 'Rindu Indah Villa Sari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus velit deserunt qui repudiandae sapiente, optio odio temporibus exercitationem magnam quo doloremque saepe, eligendi libero totam facere sequi similique illum odit. Laudantium ea ab hic? Praesentium minus odit alias sapiente nisi ullam fuga molestiae iusto optio recusandae, adipisci maxime molestias quisquam rerum nostrum autem vero nulla ratione quae reprehenderit ex? Accusantium molestiae consectetur necessitatibus, fugit neque dolore nemo voluptas ullam temporibus amet natus, modi magnam eaque culpa, iure at. Maiores reiciendis dignissimos ipsam aspernatur quisquam voluptatem? Totam, nisi ipsum ducimus esse nostrum sed ad, eos quod, dolor libero nemo illum?'
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // Foreach($posts as $p){
        //     if($p['slug'] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
