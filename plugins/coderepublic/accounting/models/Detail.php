<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class Detail extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_details';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
                              public $belongsTo = [
                 
                 'voucher' => ['Coderepublic\User\Models\Voucher'],
                   'account' => ['Coderepublic\User\Models\Account'],
                       'transaction_type' => ['Coderepublic\User\Models\TransactionType']


    ];
}
