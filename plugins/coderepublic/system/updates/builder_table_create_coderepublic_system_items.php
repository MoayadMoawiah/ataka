<?php namespace Coderepublic\System\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicSystemItems extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_system_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('sales_invoce_id');
            $table->string('record_idmorphed');
            $table->text('record_type');
            $table->decimal('unit_price', 10, 0);
            $table->string('quantity');
            $table->decimal('tax', 10, 0);
            $table->decimal('exchange_rate', 10, 0);
            $table->smallInteger('dicount');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_system_items');
    }
}
