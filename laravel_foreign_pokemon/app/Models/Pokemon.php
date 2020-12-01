<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'type_id', 'id');
    }
}
