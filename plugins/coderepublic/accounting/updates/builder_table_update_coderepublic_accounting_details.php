<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCoderepublicAccountingDetails extends Migration
{
    public function up()
    {
        Schema::table('coderepublic_accounting_details', function($table)
        {
            $table->renameColumn('voucher', 'voucher_id');
        });
    }
    
    public function down()
    {
        Schema::table('coderepublic_accounting_details', function($table)
        {
            $table->renameColumn('voucher_id', 'voucher');
        });
    }
}
