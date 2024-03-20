<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('rated_by');
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->timestamp('timestamp')->useCurrent();

            $table->foreign('reservation_id')->references('reservation_id')->on('reservation')->onDelete('cascade');
            $table->foreign('rated_by')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}

?>