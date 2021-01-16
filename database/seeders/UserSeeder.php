<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'مسعود منصوری',
            'family' => '-= M A N S O R Y =-',
            'avatar' => 'https://lh3.googleusercontent.com/a-/AOh14Gh6o5FxjwQrV2C5BowqUtZt0sthocgTZvmzSMfG=s96-c-rg-br100',
            'mobile' => '09158007242',
            'email' => 'm@m.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'علی ریاضی',
            'family' => 'Ali Ronaldo',
            'avatar' => '',
            'mobile' => '09156202629',
            'email' => 'ali@ali.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'رضا صادقی',
            'family' => 'Meshki Eshghe',
            'avatar' => '',
            'mobile' => '09375615071',
            'email' => 'reza@reza.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
