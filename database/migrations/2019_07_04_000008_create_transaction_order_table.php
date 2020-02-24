<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionOrderTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'transaction_order';

    /**
     * Run the migrations.
     * @table transaction_order
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('transaction_order_id');
            $table->unsignedInteger('user_id');
            $table->string('transaction_order_products');
            $table->unsignedInteger('payment_id');
            $table->string('transaction_order_amount_price', 7);
            $table->string('transaction_order_amount_delivery_fee', 10);
            $table->string('transaction_order_status', 1);

            $table->index(["payment_id"], 'transaction_order_payment_id_foreign');

            $table->index(["user_id"], 'transaction_order_user_id_foreign');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('payment_id', 'transaction_order_payment_id_foreign')
                ->references('payment_id')->on('payment')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('user_id', 'transaction_order_user_id_foreign')
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
