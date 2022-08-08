<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->text('identity');
            $table->text('nomer_rekening');
            $table->text('certificate');
            $table->text('profile_instagram');
            $table->integer('status_identity');
            $table->integer('status_nomer_rekening');
            $table->integer('status_certificate');
            $table->integer('status_profile_instagram');
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
