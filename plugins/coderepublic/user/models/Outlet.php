<?php namespace Coderepublic\User\Models;

use Model;

/**
 * Model
 */
class Outlet extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_user_outlet';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
