<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tenant = Tenant::first();

        $tenant->users()->create([
            'name' => 'Thiago Silva',
            'email' => 'adsl.thiago@gmail.com',
            'password' => bcrypt('Gabriel@1212')
        ]);
    }
}
