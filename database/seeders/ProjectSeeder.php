<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Progetto 1',
            'description' => 'Descrizione progetto 1',
            'image' => 'https://via.placeholder.com/150'
        ]);
        Project::create([
            'title' => 'Progetto 2',
            'description' => 'Descrizione progetto 2',
            'image' => 'https://via.placeholder.com/150'
        ]);
    }
}
