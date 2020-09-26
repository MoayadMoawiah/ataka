<?php namespace Coderepublic\Purchasing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicPurchasingItems extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_purchasing_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('purchase_invoice_id');
            $table->string('device_id');
            $table->string('unit_price');
            $table->text('quantity');
            $table->decimal('tax', 10, 0);
            $table->decimal('exchange_rate', 10, 0);
            $table->decimal('dicount', 10, 0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_purchasing_items');
    }
}
