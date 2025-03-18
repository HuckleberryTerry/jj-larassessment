<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $companies = Companies::factory(20)->create();
        Employees::factory(100)->create([
            'companies_id' => fn () => $companies->random()->id
        ]);
    }
}
