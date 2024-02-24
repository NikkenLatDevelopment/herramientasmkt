<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $connection = 'mysql_PANEL';
    protected $table = 'regional_business_brochure_forms';
    protected $primaryKey = 'id_form';

    protected $fillable = [
        'code',
        'data_1',
        'data_2',
        'data_3',
        'data_4',
        'data_5',
        'data_6',
        'data_7',
        'data_8',
        'data_9',
        'data_10',
        'data_11',
        'data_12',
        'data_13',
        'data_14',
        'data_15',
        'data_16',
        'data_17',
        'data_18',
    ];
}
