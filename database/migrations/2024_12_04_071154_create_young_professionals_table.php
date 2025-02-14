<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoungProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('young_professionals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_group_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email');
            $table->string('cell')->nullable();
            $table->string('work_telephone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('race')->nullable(); // For property charter purposes
            $table->string('company_name')->nullable();
            $table->text('postal_address')->nullable();
            $table->string('professional_qualification')->nullable();
            $table->string('position')->nullable();
            $table->string('management_level')->nullable();
            $table->text('other_organisations')->nullable();
            $table->text('core_business')->nullable();
            $table->text('core_focus')->nullable();
            $table->string('invoice_company')->nullable();
            $table->text('invoice_address')->nullable();
            $table->string('code')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('invoice_email')->nullable();
            $table->integer('paid')->default(0)->nullable();
            $table->integer('read_constitution')->default(1)->nullable();
             $table->integer('paid')->default(0)->nullable();
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
        Schema::dropIfExists('young_professionals');
    }
}
