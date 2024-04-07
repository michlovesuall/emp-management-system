<?php


use App\Models\Department;
use App\Models\User;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\CountriesSeeder;
use Database\Seeders\StatesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        User::factory()->create([
            'name' => 'admin',
            'email'=> 'admin@example.com',
            'is_admin' => true,
        ]);
        
        $this->call(CountriesSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);

    }
}
