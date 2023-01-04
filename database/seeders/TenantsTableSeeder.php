<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'cpf_cnpj'=> '82223378072',
            'name' => 'Thiago Silva',
            'url' => 'thiago-silva',
            'email' => 'adsl.thiago@gmail.com',
        ]);
    }
}
