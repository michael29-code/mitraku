<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mitraName');
            $table->text('mitraOverview');
            $table->integer('mitraYear');
            $table->string('mitraWebsite');
            // $table->string('mitraCategory');
            $table->unsignedBigInteger('mitraCategory');
            $table->foreign('mitraCategory')->references('id')->on('categories')->onDelete('cascade');

            $table->string('image_cover')->nullable(); 
            $table->string('contactName');
            $table->string('contactEmail');
            $table->string('contactPhoneNumber');
            $table->text('mitra_details');
            $table->string('image_map')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('isBlocked');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};