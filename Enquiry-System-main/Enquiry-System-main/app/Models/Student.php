<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'mobile',
        'status',
        'course',
        'remarks'

    ];

   /**
    * Get the Course that owns the Student
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function Course()
   {
       return $this->belongsTo(Course::class);
   }
}
