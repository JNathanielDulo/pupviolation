<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationSanctions extends Model
{
    use HasFactory;

    protected $table = "violation_sanctions";

    protected $dates = ['deleted_at'];
    public $primarykey ="id";
    public $timestamps = true;
    protected $guarded = [];

    public funciton violation()
    {
        return $this->belongsTo(Violation::class);
    }
}
