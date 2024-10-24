<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = new Task();
        $tasks->name = 'Tarea 1';
        $tasks->description = 'En este momento hay una tarea en el sistema';
        $tasks->user_id = User::find(1)->id;
        $tasks->save();
        $tasks2 = new Task();
        $tasks2->name = 'Tarea 2';
        $tasks2->description = 'Tarea de como pegar a Ruben Ruedas';
        $tasks2->user_id = User::find(1)->id;
        $tasks2->save();
             
    }
}
