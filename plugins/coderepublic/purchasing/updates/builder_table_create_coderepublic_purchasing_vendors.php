<?php namespace Coderepublic\Purchasing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicPurchasingVendors extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_purchasing_vendors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('added_id');
            $table->text('name');
            $table->string('account_no');
            $table->date('oppening_date');
            $table->decimal('balance', 10, 0);
            $table->text('notes');
            $table->string('phone');
            $table->text('email');
            $table->text('address');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_purchasing_vendors');
    }
}
