<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ViolationSanctions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "violation_sanctions";

    protected $dates = ['deleted_at'];
    public $primarykey ="id";
    public $timestamps = true;
    protected $guarded = [];

    public function violation()
    {
        return $this->belongsTo(Violation::class);
    }
}
