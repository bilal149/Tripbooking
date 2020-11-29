<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Flier
 * @package App\Models
 * @version November 11, 2020, 6:52 am UTC
 *
 * @property string $image_url
 */ 
class Flier extends Model
{
    use SoftDeletes;

    public $table = 'fliers';
    
    public $primarykey = 'id';
    public $timestamps='true'; 
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
