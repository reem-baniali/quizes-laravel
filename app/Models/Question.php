<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
     protected $fillable = [ 'text','points','exam_id','number','option1','option2',
                                'option3','option4','correct_answer'  ];

     public function exam(){
        return $this->belongsTo(Exam::class);
    }
     public function option(){
        return $this->hasMany(Option::class);
    }
}
