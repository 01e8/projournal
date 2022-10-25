<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
          [
            'first_name' => 'Иван',
            'last_name' => 'Иванов',
            'patronymic' => 'Иванович',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'first_name' => 'Александр',
            'last_name' => 'Лебедев',
            'patronymic' => 'Константинович',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'first_name' => 'Татьяна',
            'last_name' => 'Корокозова',
            'patronymic' => 'Михайловна',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
        ]);
    }
}
