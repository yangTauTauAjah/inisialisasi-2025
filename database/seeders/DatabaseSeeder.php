<?php

namespace Database\Seeders;

use App\Models\FileManager;
use App\Models\sub_task;
use App\Models\task_group;
use App\Models\TaskGroup;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        TaskGroup::create([
            'task_group_name' => 'PRA INISIALISASI',
            'active' => 1
        ]);
        TaskGroup::create([
            'task_group_name' => 'INISIALISASI Day 1',
            'active' => 1
        ]);
        TaskGroup::create([
            'task_group_name' => 'INISIALISASI Day 2',
            'active' => 1
        ]);
        TaskGroup::create([
            'task_group_name' => 'INISIALISASI Day 3',
            'active' => 1
        ]);
        TaskGroup::create([
            'task_group_name' => 'INISIALISASI Day 4',
            'active' => 1
        ]);
        
        User::create([
            'name' => 'Admin_KSK',
            'email' => 'admin@gmail.com',
            'isAdmin' => 1,
            'kelompok' => '-',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Admin_inisialisasi2024',
            'email' => 'inisialisasi2024@gmail.com',
            'isAdmin' => 1,
            'kelompok' => '-',
            'password' => bcrypt('KENZI2024'),
        ]);

        User::create([
            'name' => 'Test User',
            'nim' => '123456789',
            'isAdmin' => 0,
            'kelompok' => 'Flutter',
            'password' => bcrypt('qwertyuiop'),
        ]);
        

        $this->call(CsvDataSeeder::class);
        
        
    }
}
