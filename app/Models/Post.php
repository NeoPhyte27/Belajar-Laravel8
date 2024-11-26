<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'author', 'excerpt', 'body']; yang bisa di isi cuma ini
    protected $guarded = ['id'];//ini akan di lindungi kecuali sisa boleh di isi

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
