<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketBerjalan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table      = 'paket_berjalan';

    public $timestamps    = false;

    public $incrementing  = false;

    protected $guarded = [];
}
