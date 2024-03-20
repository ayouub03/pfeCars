<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->string('username', 25);
            $table->string('full_name', 50);
            $table->string('address', 255)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('cin', 15)->nullable();
            $table->enum('user_type', ['owner', 'renter'])->default('renter');
            $table->string('profile_picture_path', 255)->nullable();
            $table->date('date_registered')->default(now());
            $table->integer('num_cars_rented')->default(0);
            $table->text('about')->nullable();
            $table->string('facebook_link', 255)->nullable();
            $table->string('instagram_link', 255)->nullable();
            $table->string('whatsapp_link', 255)->nullable();
            $table->string('driver_license', 255)->nullable();
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
