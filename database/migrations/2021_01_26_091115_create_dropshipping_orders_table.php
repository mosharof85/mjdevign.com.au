<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropshippingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropshipping_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->text('domain_name')->nullable();
            $table->text('existing_domain')->nullable();
            $table->text('domain_provider')->nullable();
            $table->boolean('hosting')->nullable();
            $table->text('store_name');
            $table->text('store_description')->nullable();;
            $table->text('productCategory')->nullable();
            $table->text('productType')->nullable();
            $table->text('noOfProducts')->nullable();
            $table->text('profitMargin')->nullable();
            $table->text('addons_data')->nullable();
            $table->text('additional_notes')->nullable();
            $table->text('logoimage')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('dropshipping_orders');
    }
}
