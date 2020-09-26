<?php namespace Coderepublic\Purchasing\Models;

use Model;

/**
 * Model
 */
class DeviceWorkflow extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_purchasing_devices_workflow';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
      public $belongsTo = [
                 
                 'user_moved_to' => ['Coderepublic\User\Models\User'],
                 'user_moved_by' => ['Coderepublic\User\Models\User'],
                 'device' => ['Coderepublic\System\Models\Device'],
                 'device_status' => ['Coderepublic\System\Models\DeviceStatus']


    ];
    
}
