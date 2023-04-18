<?php
 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Casts\Attribute; 
use Illuminate\Database\Eloquent\Model; 
 
class User extends Model
{ 
 /** 
 * Get the user's first name. 
 * 
 * @return \Illuminate\Database\Eloquent\Casts\Attribute 
 */
 protected function name(): Attribute
 { 
 return Attribute::make( 
 get: fn ($value) => strtoupper($value) 
 ); 
 } 
} 
