<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('url')->nullable();
            $table->text('details')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE gifts ADD CONSTRAINT gifts_name_length_check CHECK (CHAR_LENGTH(name) BETWEEN 3 AND 50)');
        DB::statement("ALTER TABLE gifts ADD CONSTRAINT gifts_url_protocol_check CHECK (url LIKE 'http://%' OR url LIKE 'https://%')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
