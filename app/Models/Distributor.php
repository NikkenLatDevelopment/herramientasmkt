<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $connection = 'mysql_NIKKEN';
    protected $table = 'control_ci';
    protected $primaryKey = 'idcontrol_ci';
}
