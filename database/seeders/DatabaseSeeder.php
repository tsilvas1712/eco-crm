<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Tenant;
use App\Models\User;
use Database\Factories\TenantFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //User::factory(100)->create();
        Tenant::factory(30)
            ->has(User::factory()->count(rand(1,25)))
            ->has(Customer::factory()->count(rand(500,4000)))
            ->create();

        //Customer::factory(2000)->create();

        /*
        $this->call([
            TenantsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
        */
    }
}
