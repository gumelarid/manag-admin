<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'user_id';
    protected $keyType = 'string';

    protected $guarded = [
    ];


    public function role()
    {
        return $this->belongsTo(RoleModel::class, 'role_id');
    }
}
