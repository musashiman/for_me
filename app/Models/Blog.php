<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    
    public function getByOrder(INT $count_limit = 10)
    {
        return $this->orderBy("updated_at","desc")->limit($count_limit)->get();
    }
    
    public function getPaginatorOrder(INT $count_limit = 10)
    {
        return $this->orderBy("updated_at","desc")->paginate($count_limit);
    }
    
    protected $fillable = [
    'title',
    'body',
];

      
}
