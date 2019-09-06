<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{

    public function up()
    {
        try{
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("phone")->nullable();
            $table->string("email");
            $table->text("comment");
            $table->boolean("status")->default(false);
        });
        } catch (Exception $e){
            $this->down();
            throw  new Exception($e->getMessage());
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
