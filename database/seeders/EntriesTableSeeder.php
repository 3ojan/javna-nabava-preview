<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntriesTableSeeder extends Seeder
{
    public function run()
    {
        Entry::factory(100)->create();  // This will create 100 entries using the factory.
    }
}
