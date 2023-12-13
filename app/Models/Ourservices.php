<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourservices extends Model
{
    use HasFactory;
    protected $table = 'ourservices';
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['url_image','title','section1title','section1description',
    'section2title','section2description','section3title','section3description','section4title','section4description'];
}
