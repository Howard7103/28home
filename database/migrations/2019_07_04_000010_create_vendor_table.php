<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     * @table vendor
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('vendor_id');
            $table->unsignedInteger('user_id');
            $table->string('vendor_name', 15);
            $table->string('vendor_email', 100);
            $table->string('vendor_address', 100);
            $table->string('vendor_telephone', 15);
            $table->string('vendor_grade', 1);
            $table->string('vendor_bank_account', 19);
            $table->string('vendor_self_photo', 100);
            $table->string('vendor_shop_photo');
            $table->string('vendor_introduce_content');
            $table->string('vendor_product_category');

            $table->index(["user_id"], 'vendor_user_id_foreign');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('user_id', 'vendor_user_id_foreign')
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
