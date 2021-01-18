<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * @note Create User
     * @note For Login, email: m@m.com password: password
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'مسعود منصوری',
            'family' => '-= M A N S O R Y =-',
            'avatar' => 'mansory.gif',
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
            'mobile' => '09151234567',
            'email' => 'ali@ali.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'رضا صادقی',
            'family' => 'Meshki Eshghe',
            'avatar' => '',
            'mobile' => '09157654321',
            'email' => 'reza@reza.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
