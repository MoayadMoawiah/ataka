<?php namespace Coderepublic\System\Models;

use Model;

/**
 * Model
 */
class Device extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_system_devices';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
        public $hasMany = [
            'devicees_workflow' => ['Coderepublic\Purchasing\Models\DeviceWorkflow', 'key'=> 'device_id'],
                'items' => ['Coderepublic\Purchasing\Models\Item', 'key'=> 'device_id'],
                    'cards' => ['Coderepublic\System\Models\Card', 'key'=> 'device_id']

    ];
          public $belongsTo = [
                 
                 'device_type' => ['Coderepublic\System\Models\DeviceType']

    ];
}
