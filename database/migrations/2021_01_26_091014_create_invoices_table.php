<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id')->from(800);
            $table->text('type');
            $table->text('status');
            $table->text('payment');
            $table->float('price');
            $table->text('receipt_url');
            $table->text('transaction_id');
            $table->timestamps();
            $table->date('created_date');
            $table->date('due_date');
            $table->text('user_name');
            $table->text('email');
            $table->unsignedBigInteger('user_id');
            $table->text('image');
            $table->text('filename');
            $table->text('description');




            $table -> foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ;
          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
