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
        Schema::create('sub_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_group_id');
            $table->foreign('task_group_id')->references('id')->on('task_groups')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('task_name');
            $table->longText('task_description');
            $table->dateTime('task_due');
            $table->boolean('active');
            $table->string('isLinks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_tasks');
    }
};
