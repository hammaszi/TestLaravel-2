<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Carbon\Carbon;
use Doctrine\DBAL\Driver\AbstractSQLiteDriver\Middleware\EnableForeignKeys;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('class')->insert([
        //     'nama_kelas' => '1-A',
        //     'created_at' => Carbon::now(),
        //     'updated_at'  => Carbon::now()
        // ]);

        // Classroom::insert([
        //     'nama_kelas' => '1-C',
        //     'created_at' => Carbon::now(),
        //     'updated_at'  => Carbon::now()
        // ]);

        $kelas = [
                  ['kelas' => '1-A'],
                  ['kelas' => '1-B'],
                  ['kelas' => '1-C'],
        ];

            foreach ($kelas as $data) {
                Classroom::insert([
                    'nama_kelas' => $data['kelas'],
                     'created_at' => Carbon::now(),
                     'updated_at'  => Carbon::now()
                ]);
            }
    }
}
