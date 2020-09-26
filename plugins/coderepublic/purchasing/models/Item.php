<?php namespace Coderepublic\Purchasing\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_purchasing_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
             public $belongsTo = [
                 
                 'invoice' => ['CCoderepublic\Purchasing\Models\Invoice'],
                   'device' => ['CCoderepublic\System\Models\Device']


    ];
}
