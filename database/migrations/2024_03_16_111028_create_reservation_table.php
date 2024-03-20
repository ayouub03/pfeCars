<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('renter_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('pickup_location', 255);
            $table->string('return_location', 255);
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'canceled', 'completed'])->default('pending');
            $table->timestamps();

            $table->foreign('car_id')->references('car_id')->on('cars')->onDelete('cascade');
            $table->foreign('renter_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}

