<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('Wallet.account_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('amount',10,2);
            $table->string('account_type');
            $table->string('transaction_type');
            $table->timestamp('transaction_date');
            $table->integer('transaction_status');
            $table->string('transaction_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('Wallet.account_table'));
    }
}
