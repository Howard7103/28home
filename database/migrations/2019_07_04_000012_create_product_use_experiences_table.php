<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUseExperiencesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'product_use_experiences';

    /**
     * Run the migrations.
     * @table product_use_experiences
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('product_use_experiences_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('transaction_order_id');
            $table->string('product_use_experiences_grade', 1);
            $table->string('product_use_experiences_content');

            $table->index(["transaction_order_id"], 'transaction_order_id');

            $table->index(["product_id"], 'product_id');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('product_id', 'product_id')
                ->references('product_id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('transaction_order_id', 'transaction_order_id')
                ->references('transaction_order_id')->on('transaction_order')
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
