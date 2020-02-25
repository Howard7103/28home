<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user';

    /**
     * Run the migrations.
     * @table user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('user_account', 30);
            $table->string('user_password', 100);
            $table->string('user_type', 1);
            $table->string('user_status', 1);
            $table->rememberToken();
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
