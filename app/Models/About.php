<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class About
 * @package App\Models
 * @version October 5, 2020, 12:15 pm UTC
 *
 * @property string $welcome
 * @property string $heading
 * @property string $sub_heading
 * @property string $details
 */
class About extends Model
{
    use SoftDeletes;

    public $table = 'abouts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'welcome',
        'heading',
        'sub_heading',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'welcome' => 'string',
        'heading' => 'string',
        'sub_heading' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'welcome' => 'required|string|max:255',
        'heading' => 'required|string|max:255',
        'sub_heading' => 'required|string|max:255',
        'details' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
