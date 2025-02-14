<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapePeninsulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cape_peninsulas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_group_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email');
            $table->string('cell')->nullable();
            $table->string('nationality')->nullable();
            $table->string('year_of_study')->nullable();
            $table->string('institution')->nullable();
            $table->string('degree')->nullable();
            $table->integer('account_active')->default(1)->nullable();
            $table->integer('member_invoiced')->default(0)->nullable();
            $table->integer('application_approved')->default(1)->nullable();
            $table->string('invoice_number')->unique()->nullable();
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
        Schema::dropIfExists('cape_peninsulas');
    }
}
