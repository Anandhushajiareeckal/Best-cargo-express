<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\ServiceController;

class services extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable =['service_heading','service_index_body'];
}
