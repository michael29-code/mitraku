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
        Schema::create('user_mitras', function (Blueprint $table) {
            $table->id();
            $table->string('mitraName');
            $table->text('mitraOverview');
            $table->integer('mitraYear');
            $table->string('mitraWebsite');
            $table->string('mitraCategory');
            $table->string('image_cover')->nullable();

            $table->string('contactName');
            $table->string('contactEmail');
            $table->string('contactPhoneNumber');

            $table->text('mitra_details');

            $table->json('galeri')->nullable();

            $table->json('latest_rating_and_certificate')->nullable();

            $table->json('awards')->nullable();

            $table->string('image_map')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mitras');
    }
};
