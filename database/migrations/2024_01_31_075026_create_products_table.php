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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pname',255);
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('tags',1000);
            $table->integer('exchange');
            $table->integer('refund');
            $table->string('pimage',255);
            $table->string('ptumbnail',255);
            $table->string('pvideo',255);
            $table->double('shipweight');
            $table->double('price');
            $table->string('stock',255);
            $table->integer('quantity');
            $table->string('pagetitle',255);
            $table->string('metadesc',255);
            $table->string('meta_url',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
