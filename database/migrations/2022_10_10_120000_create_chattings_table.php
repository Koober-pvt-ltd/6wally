<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChattingsTable extends Migration
{
    public function up()
    {
        Schema::create('chattings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->tinyInteger('sent_by_seller')->nullable();
            $table->tinyInteger('sent_by_delivery_man')->nullable();
            $table->tinyInteger('sent_by_admin')->nullable();
            $table->tinyInteger('seen_by_seller')->nullable();
            $table->tinyInteger('seen_by_delivery_man')->nullable();
            $table->tinyInteger('seen_by_admin')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chattings');
    }
}
