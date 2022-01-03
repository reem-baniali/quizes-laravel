<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
//  protected $guarded = [];
     protected $fillable = [ 'title','number_of_questions','time_estimation','category_id' ];
 
     public function category(){
        return $this->belongsTo(Category::class);
    }

     public function question(){
        return $this->hasMany(Question::class);
    }
      public function result(){
        return $this->hasMany(Result::class);
    }
}
