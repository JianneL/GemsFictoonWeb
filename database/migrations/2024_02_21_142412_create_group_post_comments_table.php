<?php

use App\Models\GroupPost;
use App\Models\GroupPostComment;
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
        Schema::create('group_post_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(GroupPost::class);
            $table->foreignIdFor(User::class);
            $table->longText('comment');
            $table->timestamps();
        });

        Schema::create('post_comments_likes', function (Blueprint $table) {
            $table->foreignIdFor(GroupPostComment::class);
            $table->foreignIdFor(User::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_post_comments');
    }
};
