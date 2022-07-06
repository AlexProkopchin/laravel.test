<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PhoneBook::factory()->count(100)->create();
        //
    }
}
