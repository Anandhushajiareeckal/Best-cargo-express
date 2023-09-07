<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\NewsController;
class news extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable =['heading','content'];

}
