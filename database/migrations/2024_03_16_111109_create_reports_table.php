<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->text('report_text');
            $table->unsignedBigInteger('reported_user_id');
            $table->unsignedBigInteger('reporter_user_id');
            $table->string('action_taken', 255)->nullable();
            $table->timestamp('report_time')->useCurrent();

            $table->foreign('reported_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('reporter_user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}

