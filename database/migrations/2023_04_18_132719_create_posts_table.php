<?php
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration
{ 
 public function up() 
{ 
 Schema::create('posts', function (Blueprint $table) { 
 $table->id(); 
 $table->string('title'); 
 $table->string('slug')->unique(); 
 $table->unsignedInteger('category_id'); 
 $table->unsignedInteger('user_id'); 
 $table->text('content'); 
 $table->string('image'); 
 $table->text('description'); 
 $table->timestamps(); 
 }); 
} 
 public function down() 
 { 
 Schema::dropIfExists('posts'); 
 } 
}; 