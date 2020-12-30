<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitieu', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->integer('tien_chi')->default(0)->nullable();
            $table->integer('tien_thu')->default(0)->nullable();
            $table->integer('tien_cho_muon')->default(0)->nullable();
            $table->integer('tien_du')->default(0)->nullable();
            $table->integer('loai_tien')->default(0)->nullable();
            $table->text('ghi_chu')->nullable();
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
        Schema::dropIfExists('chitieu');
    }
}
