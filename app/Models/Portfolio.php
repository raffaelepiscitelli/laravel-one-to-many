<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'project',
        'author',
        'description',
        'date',
        'type_id',
    ]; 

    public function type(){
        return $this->belongsTo(Type::class);
    }
}


