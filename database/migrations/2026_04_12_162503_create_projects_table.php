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
        Schema::create('projects', function (Blueprint $table) {
//            CREATE TABLE `projects`.`project` (
//            `id` INT NOT NULL AUTO_INCREMENT,
//          `title` VARCHAR(45) NULL,
//          `description` TEXT(100) NULL,
//          `status` ENUM('planned', 'ongoing', 'done') NULL,
//          PRIMARY KEY (`id`));

            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['planned', 'ongoing', 'done'])->default('planned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devtracker');
    }
};
