<?php namespace Coderepublic\System\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicSystemCustomers extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_system_customers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->binary('acount_no');
            $table->date('oppening_date');
            $table->decimal('balance', 10, 0);
            $table->text('notes');
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->string('added_id');
            $table->text('likes_message');
            $table->text('likes_emails');
            $table->text('attachments');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_system_customers');
    }
}
