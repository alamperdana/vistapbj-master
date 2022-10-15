<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonTender extends Model
{
    use HasFactory;
    protected $connection = "pgsql";
    protected $table = "infonontender";
}
