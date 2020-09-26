<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicAccountingExchangeRate extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_accounting_exchange_rate', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->date('rate_start_time');
            $table->date('rate_end_time');
            $table->decimal('exchange_rate', 10, 0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_accounting_exchange_rate');
    }
}
