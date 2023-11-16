<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    Task::factory(10)->create();
    $this->call(UserSeeder::class);
  }
}
