<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->foreignId('author_id')->constrained('users');
            $table->date('dateline');
            $table->integer('target_amount');
            $table->string('img_url')
                ->default(
                    'https://th.bing.com/th/id/R.ede26850f78b31dcb0c104fabaeecbfd?rik=n61fK63xcRrSDg&riu=http%3a%2f%2fi.huffpost.com%2fgen%2f1398288%2fthumbs%2fo-DONATING-TO-CHARITY-facebook.jpg&ehk=MznZ4e8w9CmyTkoTvQY0S3vxU0ItINWxw1g6DVqkr0U%3d&risl=&pid=ImgRaw&r=0
                    ');
            $table->date('start_date');
            $table->string('status');
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
        Schema::dropIfExists('campaigns');
    }
};
