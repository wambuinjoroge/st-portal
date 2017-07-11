<?php

use Illuminate\Database\Seeder;
use App\Task;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'task' => 'Weekend hookup',
            'description' => 'Call Helga in the afternoon',
            'done' => false,
        ]);

        Task::create([
            'task' => 'Late night coding',
            'description' => 'Finishing coding POS API',
            'done' => false,
        ]);
    }
}
