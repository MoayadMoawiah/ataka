<?php namespace Coderepublic\System\Models;

use Model;

/**
 * Model
 */
class Invoice extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_system_invoices';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
              public $hasMany = [
            'items' => ['Coderepublic\System\Models\Item', 'key'=> 'sales_invoice_id']

    ];
                    public $belongsTo = [
                 
                 'user' => ['Coderepublic\user\Models\User']

    ];
}
