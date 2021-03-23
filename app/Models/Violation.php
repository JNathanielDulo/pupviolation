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
}
