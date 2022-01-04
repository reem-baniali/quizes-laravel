<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
     protected $fillable = [ 'user_answer','user_id','exam_id','question_id' ];
       public function result(){
        return $this->belongsTo(Result::class);
    }
}
