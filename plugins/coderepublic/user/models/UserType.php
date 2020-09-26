<?php namespace Coderepublic\User\Models;

use Model;

/**
 * Model
 */
class UserType extends Model
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
    
            public $belongsTo = [
        'type' => ['Coderepublic\User\Models\Types'],
            'user' => ['Coderepublic\User\Models\User']

                      

    ];
    
}
