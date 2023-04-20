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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text("description")->default("-");
            $table->decimal("amount", 14, 2)->default(0);
            $table->enum("type", ["infaq", "hibah", "wakaf", "iuran", "donasi", "zakat", "perawatan", "air", "listrik", "gaji", "operasional", "sumbangan"]);
            $table->enum("method", ["income", "expense"]);
            $table->unsignedBigInteger("mosque_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
