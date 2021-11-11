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
        $this->createAdminSix();
        $this->createAdminSeven();
        $this->createAdminEight();
        $this->createAdminNine();
        $this->createAdminTen();
        $this->createAdminEleven();
        $this->createAdminTwelve();
        $this->createAdminThirteen();
        $this->createAdminFourteen();
        $this->createAdminFifteen();
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

    public function createAdminSix() {
        $club = Club::find(6);
        $user = $club->users()->create([
            'name' => 'OMG Club',
            'email' => 'omg@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminSeven() {
        $club = Club::find(7);
        $user = $club->users()->create([
            'name' => 'Thekla',
            'email' => 'thekla@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminEight() {
        $club = Club::find(8);
        $user = $club->users()->create([
            'name' => 'Lola Lo',
            'email' => 'lolalo@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminNine() {
        $club = Club::find(9);
        $user = $club->users()->create([
            'name' => 'Cosies',
            'email' => 'cosies@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminTen() {
        $club = Club::find(10);
        $user = $club->users()->create([
            'name' => 'The Black Swan',
            'email' => 'theblackswan@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminEleven() {
        $club = Club::find(11);
        $user = $club->users()->create([
            'name' => "The Crofters' Rights",
            'email' => 'thecroftersrights@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

    public function createAdminTwelve() {
        $club = Club::find(12);
        $user = $club->users()->create([
            'name' => "Attic Bar",
            'email' => 'atticbar@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

        public function createAdminThirteen() {
        $club = Club::find(13);
        $user = $club->users()->create([
            'name' => "Dojo Lounge",
            'email' => 'dojolounge@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

        public function createAdminFourteen() {
        $club = Club::find(14);
        $user = $club->users()->create([
            'name' => "Strange Brew",
            'email' => 'strangebrew@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }

        public function createAdminFifteen() {
        $club = Club::find(15);
        $user = $club->users()->create([
            'name' => "The Island",
            'email' => 'theisland@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('admin');
    }
}
