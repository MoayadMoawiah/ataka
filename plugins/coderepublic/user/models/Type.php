<?php namespace Coderepublic\User\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_user_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
         public $hasMany = [
            'user_types' => ['Coderepublic\User\Models\UserType', 'key'=> 'user_type_id']

    ];
}
