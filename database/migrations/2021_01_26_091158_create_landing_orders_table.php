<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->text('domain_name')->nullable();
            $table->text('existing_domain')->nullable();
            $table->text('domain_provider')->nullable();
            $table->boolean('hosting')->nullable(); 
            $table->text('web_name');
            $table->boolean('isLogo')->nullable();
            $table->text('logoimage')->nullable();
            $table->text('about_business')->nullable();
            $table->text('web_for')->nullable();
            $table->text('page_data')->nullable();
            $table->text('feature_data')->nullable();
            $table->text('include_data')->nullable();
            $table->text('addons_data')->nullable();
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
        Schema::dropIfExists('landing_orders');
    }
}
