<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSoalMatematikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_matematika', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('answer');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
        });
        DB::statement("ALTER TABLE `soal_matematika` ADD `question_img` MEDIUMBLOB");
        DB::statement("ALTER TABLE `soal_matematika` ADD `answer_img` MEDIUMBLOB");
        DB::statement("ALTER TABLE `soal_matematika` ADD `option1_img` MEDIUMBLOB");
        DB::statement("ALTER TABLE `soal_matematika` ADD `option2_img` MEDIUMBLOB");
        DB::statement("ALTER TABLE `soal_matematika` ADD `option3_img` MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal_matematika');
    }
}
