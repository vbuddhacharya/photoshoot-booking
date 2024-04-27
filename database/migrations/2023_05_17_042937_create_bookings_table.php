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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            
            $table->string('cust_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('cust_contact');
            $table->string('location');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->bigInteger('no_of_people');
            $table->string('time')->default('6 AM');
            $table->boolean('all_day')->default('0');
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
        Schema::dropIfExists('bookings');
    }
};
