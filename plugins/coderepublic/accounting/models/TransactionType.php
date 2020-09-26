<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class TransactionType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_transactions_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
              public $hasMany = [
            'details' => ['Coderepublic\Accounting\Models\Details', 'key'=> 'transaction_type_id']


    ];
}
