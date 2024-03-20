<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('make', 50);
            $table->string('model', 50);
            $table->integer('year');
            $table->string('license_plate', 30);
            $table->decimal('price_per_day', 10, 2);
            $table->integer('capacity');
            $table->string('fuel_type', 20);
            $table->integer('odometer');
            $table->date('insurance_expiration_date');
            $table->unsignedBigInteger('owner_id');
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->text('description')->nullable();
            $table->string('car_image', 255)->nullable();
            $table->text('car_features')->nullable();
            $table->date('date_added')->default(now());
            $table->integer('times_rented')->default(0);
            $table->timestamps();

            $table->foreign('owner_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}

?>