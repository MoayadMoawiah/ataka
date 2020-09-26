<?php namespace Coderepublic\System\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicSystemInvoices extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_system_invoices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('customer_id');
            $table->date('invoice_time');
            $table->string('added_by_id');
            $table->text('attachments');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_system_invoices');
    }
}
