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
            $table->string('task_description');
            $table->date('task_due');
            $table->date('task_done')->nullable();
            $table->string('task_file')->nullable();
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
