<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'customer';

    /**
     * Run the migrations.
     * @table customer
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('customer_id');
            $table->unsignedInteger('user_id');
            $table->string('customer_name', 15);
            $table->string('customer_email', 100);
            $table->string('customer_birthday', 16);
            $table->string('customer_address', 100);
            $table->string('customer_telephone', 15);
            $table->string('customer_grade', 1);
            $table->string('customer_bank_account', 19);
            $table->string('customer_self_photo', 100);

            $table->index(["user_id"], 'customer_user_id_foreign');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('user_id', 'customer_user_id_foreign')
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
