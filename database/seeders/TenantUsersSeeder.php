<?php

namespace Database\Seeders;

use App\Models\Tenant\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TenantUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 5; $x++) {
            $faker = Faker::create();
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
