<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\User;
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
        $this->createAdminOne();
        $this->createAdminTwo();
        $this->createAdminThree();
        $this->createAdminFour();
        $this->createAdminFive();
    }

    public function createAdminOne() {
        $club = Club::first();
        $user = $club->users()->create([
            'name' => 'Motion',
            'email' => 'motion@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminTwo() {
        $club = Club::find(2);
        $user = $club->users()->create([
            'name' => 'Lakota',
            'email' => 'lakota@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

     public function createAdminThree() {
        $club = Club::find(3);
        $user = $club->users()->create([
            'name' => 'TheFleece',
            'email' => 'thefleece@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminFour() {
        $club = Club::find(4);
        $user = $club->users()->create([
            'name' => 'SWX',
            'email' => 'swx@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminFive() {
        $club = Club::find(5);
        $user = $club->users()->create([
            'name' => 'Basement45',
            'email' => 'basement45@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }
}
