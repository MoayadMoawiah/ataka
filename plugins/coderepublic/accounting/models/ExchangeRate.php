<?php namespace Coderepublic\Accounting\Models;

use Model;

/**
 * Model
 */
class ExchangeRate extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_accounting_exchange_rate';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
