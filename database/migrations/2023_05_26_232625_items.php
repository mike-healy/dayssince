<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function(Blueprint $table) {
            $table->integerIncrements('id');
            $table->mediumInteger('user_id')->index();
            $table->string('name', 40);
            $table->dateTime('done_at')->nullable();
            $table->smallInteger('target_frequency')->unsigned()->nullable(); // target to do within N days
            $table->char('color', 11)->nullable(); //hsl no % symbol. e.g. 335,80,100
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::drop('items');
    }
};
