<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'contact';

    /**
     * Run the migrations.
     * @table contact
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('contact_id');
            $table->unsignedInteger('contact_from_user_id');
            $table->unsignedInteger('contact_to_user_id');
            $table->string('contact_content');

            $table->index(["contact_from_user_id"], 'contact_contact_from_user_id_foreign');

            $table->index(["contact_to_user_id"], 'contact_contact_to_user_id_foreign');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('contact_from_user_id', 'contact_contact_from_user_id_foreign')
                ->references('user_id')->on('user')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('contact_to_user_id', 'contact_contact_to_user_id_foreign')
                ->references('user_id')->on('user')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
