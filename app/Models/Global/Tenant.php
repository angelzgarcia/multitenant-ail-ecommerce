<?php
namespace App\Models\Global;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $connection = 'global';
    protected $table = 'tenants';
}
