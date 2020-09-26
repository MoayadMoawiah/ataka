<?php namespace Coderepublic\System\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCoderepublicSystemCustomers2 extends Migration
{
    public function up()
    {
        Schema::table('coderepublic_system_customers', function($table)
        {
            $table->binary('acount_no')->nullable()->change();
            $table->date('oppening_date')->nullable()->change();
            $table->string('added_id', 191)->nullable()->change();
            $table->text('likes_message')->nullable()->change();
            $table->text('likes_emails')->nullable()->change();
            $table->text('attachments')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('coderepublic_system_customers', function($table)
        {
            $table->binary('acount_no')->nullable(false)->change();
            $table->date('oppening_date')->nullable(false)->change();
            $table->string('added_id', 191)->nullable(false)->change();
            $table->text('likes_message')->nullable(false)->change();
            $table->text('likes_emails')->nullable(false)->change();
            $table->text('attachments')->nullable(false)->change();
        });
    }
}
