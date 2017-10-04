<?php namespace Vonzimmerman\DisplayCase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVonzimmermanDisplaycaseLink2 extends Migration
{
    public function up()
    {
        Schema::table('vonzimmerman_displaycase_link', function($table)
        {
            $table->increments('link_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('vonzimmerman_displaycase_link', function($table)
        {
            $table->dropColumn('link_id');
        });
    }
}
