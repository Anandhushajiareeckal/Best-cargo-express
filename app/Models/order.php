<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\OrderController;
class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
}