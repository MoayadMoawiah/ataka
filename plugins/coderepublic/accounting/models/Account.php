<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class Account extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_accounts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
      public $hasMany = [
            'vouchers' => ['Coderepublic\Accounting\Models\Voucher', 'key'=> 'account_id'],
                   'details' => ['Coderepublic\Accounting\Models\Details', 'key'=> 'account_id'],


    ];
                        public $belongsTo = [
                 
                 'category' => ['Coderepublic\Accounting\Models\Category']

    ];
}
