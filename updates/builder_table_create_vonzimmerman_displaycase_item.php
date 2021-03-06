<?php namespace Vonzimmerman\DisplayCase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVonzimmermanDisplayCaseItem extends Migration
{
    public function up()
    {
        Schema::create('vonzimmerman_displaycase_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('sections')->nullable();
            $table->text('short_description')->nullable();
            $table->string('tags')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->dateTime('item_date')->nullable();
            $table->boolean('published')->nullable()->default(0);
            $table->integer('sort_order')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vonzimmerman_displaycase_item');
    }
}
