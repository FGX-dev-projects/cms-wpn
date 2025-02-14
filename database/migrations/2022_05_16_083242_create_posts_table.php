<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreatePostsTable extends Migration
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
            $table->string('title');
            // $table->text('subtitle')->nullable();
            $table->text('content');
            // $table->string('author')->nullable();
            // $table->string('article_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('article_date')->useCurrent();
            // $table->string('small_image')->nullable();
            // $table->string('large_image')->nullable();
            $table->integer('is_active')->default(1);
            $table->string('slug')->nullable();
            $table->timestamps();
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
}
