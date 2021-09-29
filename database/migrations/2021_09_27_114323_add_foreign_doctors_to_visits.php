<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignDoctorsToVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {
            // w nawiasie zostały nadane nazwy tych kluczy żeby nie były takie same w obu migracjach
        $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id','visits_doctor_id_foreign')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropForeign('visits_doctor_id_foreign');
        });
    }
}
