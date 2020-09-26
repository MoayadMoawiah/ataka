<?php namespace Coderepublic\System\Models;

use Model;

/**
 * Model
 */
class Card extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'coderepublic_system_cards';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
              public $belongsTo = [
                 
                 'device' => ['Coderepublic\System\Models\Device']

    ];
}
