<?php

namespace Database\Seeders;

use App\Models\DomainList;
use App\Models\Role;
use App\Models\TimeFormat;
use App\Models\TimeOff;
use Database\Seeders\TimeOffDescSeeder;
use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Time;
use App\Models\UserSetting;
use App\Models\SystemSetting;
use Database\Seeders\rolesseeder;
use Database\Seeders\TimeFormatSeeder;
use Database\Seeders\TypographySizeSeeder;
use Facade\FlareClient\Time\SystemTime;

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
        $this->call(rolesseeder::class);
        $this->call(TypographySizeSeeder::class);
        $this->call(DomainListSeeder::class);
        $this->call(TimeOffDescSeeder::class);
        $this->call(TimeFormatSeeder::class);
        Users::factory(5)->create();
        TimeOff::factory(5)->create();
        UserSetting::factory(5)->create();
        Time::factory(10)->create();
        SystemSetting::factory(5)->create();
    }
}