<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnQuranTopics extends Model
{
    use HasFactory;
    public function verses(){
    	return $this->hasMany(EnQuranVerse::class, 'topic_id');
    }

}
