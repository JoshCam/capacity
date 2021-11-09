<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Motion Event
        Event::create([
            'name' => 'Planet Sink The Pink',
            'image' => 'https://motion-bristol.com/wp-content/uploads/2021/10/187653603_10159041466114597_7011469205910439700_n.jpeg',
            'description' => 'Everybody’s welcome on Planet Sink The Pink!🪐AMANDA LEPORE, JODIE HARSH & JUNGLE KITTY🚀You’ve arrived at your future queer utopia💥',
            'date' => '2021-11-20',
            'start_time' => '22:00:00',
            'finish_time' => '03:00:00',
            'club_id' => 1,
        ]);
        // // Motion Event 2
        Event::create([
            'name' => 'Mall Grab & Friends',
            'image' => 'https://motion-bristol.com/wp-content/uploads/2021/10/mall-grab.jpeg',
            'description' => 'Mall Grab returns to Bristol on 19th of November alongside Effy & many more for the first time in a year and a half.',
            'date' => '2021-11-19',
            'start_time' => '23:30:00',
            'finish_time' => '03:00:00',
            'club_id' => 1,
        ]);
        // // Motion Event 3
        Event::create([
            'name' => 'Gorgon City',
            'image' => 'https://motion-bristol.com/wp-content/uploads/2021/10/gorgon-city.jpeg',
            'description' => 'Olympia Tour 2021',
            'date' => '2021-12-03',
            'start_time' => '22:00:00',
            'finish_time' => '05:00:00',
            'club_id' => 1,
        ]);

        // Lakota Event 1
        Event::create([
            'name' => 'Wide Eyes: Skepsis',
            'image' => 'https://lakota.co.uk/app/uploads/2021/08/Webp.net-resizeimage-2-1.jpg',
            'description' => 'Wide Eyes is back for a huge bassline special this November!',
            'date' => '2021-11-12',
            'start_time' => '22:00:00',
            'finish_time' => '03:00:00',
            'club_id' => 2,
        ]);

        // Lakota Event 2
        Event::create([
            'name' => 'Shutdown: Crossy, T-Lex, Anais',
            'image' => 'https://lakota.co.uk/app/uploads/2021/10/cover-2-500-1-1.png',
            'description' => 'Shutdown brings down Born on Road superstar Crossy for his main room debut!',
            'date' => '2021-11-23',
            'start_time' => '22:00:00',
            'finish_time' => '03:00:00',
            'club_id' => 2,
        ]);

        // Lakota Event 3
        Event::create([
            'name' => 'Shutdown: 30.11.21',
            'image' => 'https://lakota.co.uk/app/uploads/2021/09/210921-Shutdown_0033-scaled.jpg',
            'description' => 'Shutdown brings a special guest and our finest residents for the best in midweek bass music!',
            'date' => '2021-11-30',
            'start_time' => '22:00:00',
            'finish_time' => '03:00:00',
            'club_id' => 2,
        ]);

        // The fleece Event 1
        Event::create([
            'name' => 'The Neville Staple Band + Roddy Radiation & The Skabilly Rebels',
            'image' => 'https://thefleece.co.uk/wp-content/uploads/2021/03/2021-11-13-Nevile-Staple-banner-1420x743.jpg',
            'description' => 'Neville Staple, also known as The Original Rudeboy, is credited with changing the face of pop music not only once but twice.',
            'date' => '2021-11-13',
            'start_time' => '19:00:00',
            'finish_time' => '12:00:00',
            'club_id' => 3,
        ]);
    }
}
