<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'news';

    /**
     * Run the migrations.
     * @table news
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('news_id');
            $table->string('news_title', 20);
            $table->string('news_content');
            $table->string('news_photo');
            $table->string('news_display_start_date', 16);
            $table->string('news_display_end_date', 16);
            $table->string('news_status', 1)->default('0');
            $table->string('news_type', 1);
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
