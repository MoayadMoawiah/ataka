<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicAccountingTransactionsType extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_accounting_transactions_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_accounting_transactions_type');
    }
}
