<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function scopeTenantCustomer(Builder $query)
    {
        return $query->where('tenant_id',auth()->user()->tenant_id);
    }

}
