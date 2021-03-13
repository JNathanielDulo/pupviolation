<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Violation extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = "violations";

    protected $dates = ['deleted_at'];

    public $primaryKey = "id";

    public $timestamps = true;
    
    // public function violation()
    // {
    //     return $this->belongsToMany(Offender::class,'Offender_Violation');
    // }
}
