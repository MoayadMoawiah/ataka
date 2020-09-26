<?php namespace Coderepublic\System\Models;

use Model;

/**
 * Model
 */
class Customer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_system_customers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
