<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider1
 * @package App\Models
 * @version September 28, 2020, 10:36 am UTC
 *
 * @property string $image_url
 */
class Slider1 extends Model
{
    use SoftDeletes;

    public $table = 'slider1s';
    
    public $primaryKey= 'id';

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
