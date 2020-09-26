<?php namespace Coderepublic\Purchasing\Models;

use Model;

/**
 * Model
 */
class Vendor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_purchasing_vendors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
       public $hasMany = [
            'invoices' => ['Coderepublic\Purchasing\Models\Invoice', 'key'=> 'vendor_id']
    ];
                 public $belongsTo = [
                 
                 'user' => ['Coderepublic\User\Models\User']


    ];
}
