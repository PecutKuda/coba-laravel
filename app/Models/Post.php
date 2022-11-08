<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //field baru bisa dibuat pakai Post::create jika sudah membuat fillable
    //protected $fillable = ['title', 'slug', 'excerpt', 'body'];


    //kebalikan dari fillable
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        //kalau ada $filters['search'] maka function dijalankan, kalau tidak maka return 'false'
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search){
                        $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
        //pada function(var1: meneruskan chain, meneruskan data)
        $query->when($filters['category'] ?? false, function($query, $category) {
            //whereHas menandakan relationship
            return $query->whereHas('category', function($query) use ($category) {
                //yang mana slugnya == category
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user) {
            return $query->whereHas('user', function($query) use ($user) {
                //yang mana usernamenya == user
                $query->where('username', $user);
            });
        });
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
