<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'description' , 'created_at' , 'updated_at'];

    protected $table = 'news';

    // private function getStartDateValue()
    // {
    //     return date('m/d/Y', strtotime($this->attributes['created_at']));
    // }

    public function getCreatedAtAttribute($created_at)
    {
        return  date("d / m / Y", strtotime($created_at));
    }
}
