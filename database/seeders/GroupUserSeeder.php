<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $group = Group::firstOrCreate([
            'name' => 'Family'
        ]);

        $group->users()->syncWithoutDetaching([$user->id]);
    }
}
