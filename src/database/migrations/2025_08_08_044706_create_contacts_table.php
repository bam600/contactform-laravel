<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //contactsテーブルのカラム設定
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('first_name',255);
            $table->string('last_name',255);
            //性別をリストで選択するカラム　modelで値を設定
            $table->tinyInteger('gender')->unsigned();
            $table->string('email',255);
            $table->string('tel',255);
            $table->string('address',255);
            $table->string('building',255)->nullable();
            $table->text('detail');
            $table->timestamps();
               
            //category_idに外部キーを設定
             $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
