<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
        User::factory(250)->create();
        $this->call(ProfileSeeder::class);
        $this->call(ProfessionProfileSeeder::class);
        $this->call(LeadSeeder::class);
        $this->call(SponsorshipSeeder::class);
        $this->call(ProfileSponsorshipSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
