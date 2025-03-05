<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lets_talk_requests', function (Blueprint $table) {
            $table->id()->from(1001);

            $table->string('name');
            $table->string('email');
            $table->string('position');
            $table->boolean('status')->default(true);
            $table->string('language', 5)->default('uk');
            
            $table->string('company_name');
            $table->string('project_name');
            $table->string('phone');
            $table->text('task');
            $table->string('budget');
            $table->string('contact_in');
            $table->string('direction');
            $table->json('files');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lets_talk_requests');
    }
};
