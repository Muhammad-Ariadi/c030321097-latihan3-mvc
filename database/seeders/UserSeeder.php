<?php
namespace Database\Seeders; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
class UserSeeder extends Seeder
{ 
 /** 
 * Run the database seeds. 
 * 
 * @return void 
 */
 public function run() 
 { 
 DB::table('users')->insert([ 
 'name' => 'Muhammad Ariadi', 
 'email' => 'c030321097@mahasiswa.poliban.ac.id', 
 'password' => Hash::make('akun1'), 
 ]); 
 } 
} 