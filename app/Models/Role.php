<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

    protected $appends = ['permissions_label'];

    public function getPermissionsLabelAttribute()
    {
        return $this->permissions->pluck('name')->join(', ');
    }
}
