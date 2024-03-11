<?php

use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Metadata\Uses;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('summary');
            $table->foreignIdFor(Genre::class);
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('books_categories', function (Blueprint $table) {
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Category::class);
        });

        Schema::create('books_likes', function (Blueprint $table) {
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(User::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
