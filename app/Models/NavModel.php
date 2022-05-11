<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavModel extends Model
{
    use HasFactory;

    protected $table = 'navigation';

    protected $primaryKey = 'nav_id';
    protected $keyType = 'string';

    protected $guarded = [];
}
