<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'product';

    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('product_id');
            $table->unsignedInteger('vendor_id');
            $table->unsignedInteger('product_category_id');
            $table->string('product_category_vendor_id', 1);
            $table->string('product_name', 15);
            $table->string('product_introduce_content');
            $table->string('product_photo');
            $table->string('product_price', 7);
            $table->string('product_discount', 2);
            $table->string('product_sell_star_date', 16);
            $table->string('product_sell_end_date', 16);
            $table->string('product_sell_count', 4);
            $table->string('product_now_count', 4);
            $table->string('product_delivery_fee', 7);
            $table->string('product_status', 1)->default('0');

            $table->index(["vendor_id"], 'product_vendor_id_foreign');

            $table->index(["product_category_id"], 'product_product_category_id_foreign');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('product_category_id', 'product_product_category_id_foreign')
                ->references('product_category_id')->on('product_category')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('vendor_id', 'product_vendor_id_foreign')
                ->references('vendor_id')->on('vendor')
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
