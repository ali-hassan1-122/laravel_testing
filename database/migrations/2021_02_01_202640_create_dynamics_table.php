<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamics', function (Blueprint $table) {
            $table->id();
            $table->string('customer')->nullable();
            $table->string('size')->nullable();
            $table->string('product_name')->nullable();
            $table->string('type')->nullable();
            $table->string('item_code')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('revision_number')->nullable();
            $table->string('tablets_saving')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('expiry')->nullable();
            $table->string('customer_product_code')->nullable();
            $table->string('pack_size')->nullable();

            $table->string('row')->nullable();


            $table->string('row2')->nullable();


            $table->string('cp')->nullable();
            $table->string('label')->nullable();
            $table->string('cl')->nullable();
            $table->string('other')->nullable();
            $table->string('storage')->nullable();
            $table->string('irradiation')->nullable();

            $table->string('gm_status')->nullable();
            $table->string('allergens')->nullable();
            $table->string('tse_bse_status')->nullable();
            $table->string('suitable_vegetarians')->nullable();
            $table->string('suitable_vegans')->nullable();
            $table->string('yes_no')->nullable();
            $table->string('amendment')->nullable();
            $table->string('amendment_date')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('date')->nullable();
            $table->string('daapproved_by_customerte')->nullable();
            $table->string('customer_date')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamics');
    }
}
