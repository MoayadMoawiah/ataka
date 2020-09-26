<?php namespace Coderepublic\System\Models;

use Model;

/**
 * Model
 */
class DeviceStatus extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_system_devices_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
            public $hasMany = [
            'device_workflow' => ['Coderepublic\Purchasing\Models\DeviceWorkflow', 'key'=> 'status_id'],

    ];
}
