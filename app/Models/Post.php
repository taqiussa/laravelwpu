<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static  $blog_posts = [
        [
            'title' => 'Judul Postingan',
            'slug' => 'judul-postingan',
            'author' => 'Penulisnya',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos asperiores distinctio alias odio quo quod ex molestias iure dolorum eligendi inventore cupiditate similique repellat fuga eveniet, dolore ad tenetur iste excepturi? Porro recusandae repellendus doloribus accusamus ut tempore. Necessitatibus numquam id neque quod obcaecati eum facilis sint voluptatum nam saepe alias magnam consectetur deserunt, ad ipsum dignissimos ex ullam incidunt officia quis iure. Eos, perferendis. Eveniet expedita iusto minima hic natus! Quo molestias mollitia suscipit? Et beatae molestiae asperiores illum!'
        ],
        [
            'title' => 'Judul Postingan 2',
            'slug' => 'judul-postingan-2',
            'author' => 'Penulisnya 2',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos asperiores distinctio alias odio quo quod ex molestias iure dolorum eligendi inventore cupiditate similique repellat fuga eveniet, dolore ad tenetur iste excepturi? Porro recusandae repellendus doloribus accusamus ut tempore. Necessitatibus numquam id neque quod obcaecati eum facilis sint voluptatum nam saepe alias magnam consectetur deserunt, ad ipsum dignissimos ex ullam incidunt officia quis iure. Eos, perferendis. Eveniet expedita iusto minima hic natus! Quo molestias mollitia suscipit? Et beatae molestiae asperiores illum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos asperiores distinctio alias odio quo quod ex molestias iure dolorum eligendi inventore cupiditate similique repellat fuga eveniet, dolore ad tenetur iste excepturi? Porro recusandae repellendus doloribus accusamus ut tempore. Necessitatibus numquam id neque quod obcaecati eum facilis sint voluptatum nam saepe alias magnam consectetur deserunt, ad ipsum dignissimos ex ullam incidunt officia quis iure. Eos, perferendis. Eveniet expedita iusto minima hic natus! Quo molestias mollitia suscipit? Et beatae molestiae asperiores illum'
        ],
    ];
    public static function all(){
        return collect(self::$blog_posts);
        //penggunaan self karena blog_posts static
        //kalau non static menggunakan $this->
    }
    public static function find($slug){
        //perbedaan self dan static
        // kalau static itu method
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
