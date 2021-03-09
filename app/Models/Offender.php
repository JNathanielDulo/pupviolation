<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offender extends Model
{
    use HasFactory;

    protected $table = "offenders";

    public $primaryKey = "id";

    public $timestamps = true;
}
