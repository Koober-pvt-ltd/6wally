<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleAndSubtitleAndBackgroundColorAndButtonTextToBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
    Schema::table('banners', function (Blueprint $table) {
        if (!Schema::hasColumn('banners', 'title')) {
            $table->string('title')->nullable(); // removed 'after'
        }

        if (!Schema::hasColumn('banners', 'sub_title')) {
            $table->string('sub_title')->nullable();
        }

        if (!Schema::hasColumn('banners', 'button_text')) {
            $table->string('button_text')->nullable();
        }

        if (!Schema::hasColumn('banners', 'background_color')) {
            $table->string('background_color')->nullable();
        }
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            Schema::dropIfExists('title');
            Schema::dropIfExists('sub_title');
            Schema::dropIfExists('button_text');
            Schema::dropIfExists('background_color');
        });
    }
}
