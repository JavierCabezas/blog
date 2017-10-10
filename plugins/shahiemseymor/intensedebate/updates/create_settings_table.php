<?php namespace ShahiemSeymor\IntenseDebate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('shahiemseymor_intensedebate_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shahiemseymor_intensedebate_settings');
    }

}
