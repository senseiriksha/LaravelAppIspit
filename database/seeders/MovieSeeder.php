<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'name' => 'Vlak u snijegu',
                'producer' => 'Mato Lovrak',
                'year' => 1933
            ],
            [
                'name' => 'The Lord of the Rings',
                'producer' => 'Peter Jackson',
                'year' => 2002
            ],
            [
                'name' => "Transformers",
                'producer' => "Michael Bay",
                'year' => 2007
            ]
        ]);
    }
}
