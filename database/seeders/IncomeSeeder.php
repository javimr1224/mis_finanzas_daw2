<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $data = [];
        $categories = ['Salary', 'Investment', 'Freelance', 'Bonus', 'Gift'];
        $newCategories = ['Employment', 'Finance', 'Self-employment', 'Other'];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'category' => $categories[array_rand($categories)], 
                'amount' => rand(50, 100),
                'newCategory' => $newCategories[array_rand($newCategories)], // Seleccionar una nueva categoría aleatoria
>>>>>>>>> Temporary merge branch 2
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }
<<<<<<<<< Temporary merge branch 1
        DB::table('incomes')->insert(
            $data);
        
    }
}

=========

        DB::table("incomes")->insert($data);
    }
}
>>>>>>>>> Temporary merge branch 2
