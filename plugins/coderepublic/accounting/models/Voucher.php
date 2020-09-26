<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class Voucher extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_vouchers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
               public $hasMany = [
            'details' => ['Coderepublic\Accounting\Models\Details', 'key'=> 'voucher_id']


    ];
                          public $belongsTo = [
                 
                 'user' => ['Coderepublic\User\Models\User'],
                   'account' => ['Coderepublic\User\Models\Account'],


    ];
}
