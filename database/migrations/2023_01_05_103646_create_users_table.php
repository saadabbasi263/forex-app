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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();   
            $table->date('date_of_birth')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('image')->nullable();
            $table->string('password')->nullable();
            $table->integer('otp')->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_email_verified')->default(0);
            $table->string('aadhaarCard')->nullable();
            $table->string('accountName')->nullable();
            $table->string('bankAccount')->nullable();
            $table->string('bankAddress')->nullable();
            $table->string('bankName')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('futureTradeFrequency')->nullable();
            $table->string('passport')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('spreadBetsFrequency')->nullable();
            $table->string('state')->nullable();
            $table->string('swiftCode')->nullable();
            $table->string('workExperience')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
         
         
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
};
