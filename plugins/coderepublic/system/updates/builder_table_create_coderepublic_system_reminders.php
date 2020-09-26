<?php namespace Coderepublic\System\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicSystemReminders extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_system_reminders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('reminder_date');
            $table->string('user_id');
            $table->string('record_id_morphed');
            $table->text('record_type');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_system_reminders');
    }
}
