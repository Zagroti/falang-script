<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WordsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::WORDS_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('pronunciation');
            $table->text('examples');
            $table->text('word');
            $table->text('definition');
            $table->text('persian');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::WORDS_DB);
    }
}
