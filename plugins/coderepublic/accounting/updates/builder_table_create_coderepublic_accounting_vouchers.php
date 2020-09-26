<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicAccountingVouchers extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_accounting_vouchers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('issued_by');
            $table->string('account_id');
            $table->date('voucher_date');
            $table->string('serial');
            $table->text('narration');
            $table->string('record_id_morphed');
            $table->text('record_type');
            $table->text('attachment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_accounting_vouchers');
    }
}
