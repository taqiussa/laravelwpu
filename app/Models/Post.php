<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //untuk membuat eager loading menggunakan with
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters){
        //ini namanya ternary kondisional
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%'. $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        //method when laravel dicombo dengan null coalescing operator '??' seperti isset dan ternary
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'. $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            //whereHas itu mencari relationship dari modelnya atau tabelnya, use category supaya bisa menchaining 3 $category,
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug',$category);
            });
        });
        // $query->when($filters['author'] ?? false, function($query, $author){
        //     return $query->whereHas('author', function($query) use ($author){
        //         $query->where('username',$author);
        //     });
        // });
        //ini kalau pakai arrow function, perbedaanya kalau arrow function bisa membaca 1 scope variabel yang di deskripsikan tidak perlu pakai use seperti use $category
        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn($query) =>
            $query->where('username', $author))
        );
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
