<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTotalBalance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('Wallet.user_total_balance_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('total_balance',10,2);
            $table->timestamp('modify_date')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('Wallet.user_total_balance_table'));
    }
}

