<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'keyword_name'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
