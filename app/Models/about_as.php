<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\AboutController;

class about_as extends Model
{
    use HasFactory;
    protected $table = 'about_as';
    protected $fillable =['first_paraagraph','content','mission','vision','quality_policy','our_objective','our_values'];
}
