<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicAccountingAccounts extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_accounting_accounts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->string('account_no');
            $table->text('nest_left');
            $table->text('nest_rigth');
            $table->text('nest_depth');
            $table->string('record_id_morphed');
            $table->text('record_type');
            $table->text('notes');
            $table->string('category_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_accounting_accounts');
    }
}
