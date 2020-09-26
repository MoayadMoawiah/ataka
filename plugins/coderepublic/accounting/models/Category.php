<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
          public $hasMany = [
            'accounts' => ['Coderepublic\Accounting\Models\Account', 'key'=> 'category_id']


    ];
}
