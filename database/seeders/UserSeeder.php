<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $password = Hash::make('12345678');
    $userRecords = [
      [
        'name' => 'Dundo',
        'email' => 'dundodotkom@gmail.com',
        'password' => $password
      ]
    ];
    User::insert($userRecords);
  }
}
