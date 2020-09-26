<?php namespace Coderepublic\Purchasing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicPurchasingInvoices extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_purchasing_invoices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('vendor_id');
            $table->date('invoice_date');
            $table->string('added_ny_id');
            $table->text('attachments');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_purchasing_invoices');
    }
}
