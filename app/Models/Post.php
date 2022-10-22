<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'title',
        'body'
        ];
    
    public function getPaginateByLimit(int $limit_count=10)
    {
        return $this->orderby('updated_at','DESC')->Paginate($limit_count);
    }
}