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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained('users');
            $table->foreignId('campaign_id')->constrained('campaigns');
            $table->bigInteger('amount');
            $table->text('desc');
            $table->string('category');
            $table->enum('status', ['SUCCESS', 'PENDING', 'CANCEL'])->default('PENDING');
            $table->timestamp('paid_at')->nullable();
            $table->boolean('is_donor_hidden')->default(false);
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
        Schema::dropIfExists('donations');
    }
};
