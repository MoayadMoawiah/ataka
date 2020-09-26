<?php namespace Coderepublic\Purchasing\Models;

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
    public $table = 'coderepublic_purchasing_invoices';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
          public $belongsTo = [
       
            'user' => ['CCoderepublic\User\Models\User'],
              'vendor' => ['CCoderepublic\Purchasing\Models\Vendor']


    ];
      public $hasMany = [
            'items' => ['Coderepublic\Purchasing\Models\Item', 'key'=> 'purchase_invoice_id']
     

    ];
}
