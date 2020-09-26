<?php namespace Coderepublic\Purchasing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCoderepublicPurchasingDevicesWorkflow extends Migration
{
    public function up()
    {
        Schema::create('coderepublic_purchasing_devices_workflow', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('moved_to_id');
            $table->string('moved_by_id');
            $table->string('device_id');
            $table->string('status_id');
            $table->text('comment');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('coderepublic_purchasing_devices_workflow');
    }
}
