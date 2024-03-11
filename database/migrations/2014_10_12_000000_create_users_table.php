<?php

use App\Enums\UserType;
use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->integer('usertype')->index()->comment(UserType::class);
            $table->longText('biography')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('following_users', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(User::class,'following_id');
        });

        Schema::create('follower_users', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(User::class,'follower_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
