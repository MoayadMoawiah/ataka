<?php namespace Coderepublic\Accounting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCoderepublicAccountingAccounts extends Migration
{
    public function up()
    {
        Schema::table('coderepublic_accounting_accounts', function($table)
        {
            $table->string('parent_id');
        });
    }
    
    public function down()
    {
        Schema::table('coderepublic_accounting_accounts', function($table)
        {
            $table->dropColumn('parent_id');
        });
    }
}
