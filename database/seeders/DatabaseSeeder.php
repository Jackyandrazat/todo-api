<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'username' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    public function run()
    {
        \App\Models\User::factory()->count(3)->create()->each(function ($user) {
            \App\Models\Checklist::factory()->count(2)->create(['user_id' => $user->id])->each(function ($checklist) {
                \App\Models\ChecklistItem::factory()->count(3)->create(['checklist_id' => $checklist->id]);
            });
        });
    }
}
