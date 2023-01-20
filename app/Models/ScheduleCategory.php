<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ScheduleCategory extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['category','description','tenant_id'];

    public function scopeTenantScheduleCategory(Builder $query)
    {
        return $query->where('tenant_id',auth()->user()->tenant_id);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
