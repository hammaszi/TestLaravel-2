<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $role = [
            ['name' => 'Admin'],
            ['name' => 'Teacher'],
            ['name' => 'Student']
  ];

  
  foreach ($role as $data) {
    Role::insert([
         'name' => $data['name'],
         'created_at' => Carbon::now(),
         'updated_at'  => Carbon::now()
    ]);
}
    }
}
