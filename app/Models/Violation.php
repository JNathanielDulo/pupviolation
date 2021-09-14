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

    protected $fillable = [
        'violationTitle',
        'type'
    ];
    protected $guarded =[];

    protected $dates = ['deleted_at'];

    public $primaryKey = "id";

    public $timestamps = true;
    
    public function violationSanctions()
    {
        return $this->hasMany(ViolationSanctions::class);
    }
    public function offenders()
    {
        return $this->belongsToMany(Offender::class,'offender_violation','violation_id','offender_id')->withPivot('status');
    }
    public function offendersPending()
    {
        return $this->belongsToMany(Offender::class,'offender_violation','violation_id','offender_id')->withPivot('status')->wherePivot('status',0);
    }
    public function offendersCleared()
    {
        return $this->belongsToMany(Violation::class,'offender_violation','violation_id','offender_id')->withPivot('status')->wherePivot('status',1);
    }
}
