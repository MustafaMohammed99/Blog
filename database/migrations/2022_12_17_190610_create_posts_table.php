<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
                ->constrained('users', 'id')->nullOnDelete();

            $table->foreignId('category_id')->nullable()
                ->constrained('categories')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();

            $table->integer('count_visitor')->default(0);

            $table->text('description');
            $table->string('image');

            $table->enum('status', ['active', 'draft', 'archived'])->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
