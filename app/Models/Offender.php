<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offender extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = "offenders";

    public $primaryKey = "id";

    public $timestamps = true;

    protected $fillable = [
        'name',
        'studentNumber',
        'course',
        'contactnum',
        'email',
        'filedby'
    ];
    protected $guarded = [];

    public function violations()
    {
        return $this->belongsToMany(Violation::class,'Offender_Violation','offender_id', 'violation_id');
    }
    public function sanctions()
    {
        return $this->hasManyThrough(ViolationSanctions::class, Violation::class);
    }
    

}
