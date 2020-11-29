<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Uploader
 * @package App\Models
 * @version September 28, 2020, 7:01 am UTC
 *
 * @property string $heading
 * @property string $details
 * @property string $image_url
 */
class Uploader extends Model
{ 
    use SoftDeletes;

    public $table = 'uploaders';
    
    public $primarykey = 'id';
    public $timestamps='true'; 
    
    protected $dates = ['deleted_at'];

 

    public $fillable = [
        'heading',
        'details',
        'image_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'heading' => 'string',
        'details' => 'string',
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
