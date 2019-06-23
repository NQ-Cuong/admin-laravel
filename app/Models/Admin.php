<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Admin
 * @package App\Models
 * @version June 12, 2019, 2:36 pm UTC
 *
 * @property integer name
 */
class Admin extends Model
{

    public $table = 'admins';
    


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'string'
    ];

    
}
