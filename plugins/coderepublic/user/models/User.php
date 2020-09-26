<?php namespace Coderepublic\User\Models;

use Model;

/**
 * Model
 */
class User extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_user_users';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
           public $hasMany = [
            'user_types' => ['Coderepublic\User\Models\UserType', 'key'=> 'user_id'],
            'invoices' => ['Coderepublic\Purchasing\Models\Invoice', 'key'=> 'added_by_id'],
            'devices_workflow_to' => ['Coderepublic\Purchasing\Models\DeviceWorkflow', 'key'=> 'moved_to_id'],
            'devices_workflow_by' => ['Coderepublic\Purchasing\Models\DeviceWorkflow', 'key'=> 'moved_by_id'],
            'vendors' => ['Coderepublic\Purchasing\Models\Vendor', 'key'=> 'added_id'],
            'invoices' => ['Coderepublic\Sysytem\Models\Invoice', 'key'=> 'added_by_id'],
            'vouchers' => ['Coderepublic\Accounting\Models\Voucher', 'key'=> 'issued_id']

    ];
}
