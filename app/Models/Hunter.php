<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunter extends Model
{
    use HasFactory;

    protected $table = 'hunters';
    protected $primarykey = 'idhunter';

    public $incrementing =false;
    public $timestamps =true;
}
