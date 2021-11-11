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

        // SWX Event 1
        Event::create([
            'name' => 'Doreen Doreen',
            'image' => 'https://swxbristol.com/imagesEvents/doreen%20doreen%20pic%202%20700x395_thumb.jpg',
            'description' => 'Doreen Doreen are a flamboyant bunch of entertainers from Bristol. Originally formed in 1982, this colourful, glittery, sparkly, Lycra-wearing bunch of crazies have enough energy and enthusiasm to get even the most beige party pumping',
            'date' => '2021-11-12',
            'start_time' => '19:00:00',
            'finish_time' => '22:00:00',
            'club_id' => 4,
        ]);

        // SWX Event 2
        Event::create([
            'name' => 'Fish',
            'image' => 'https://swxbristol.com/imagesEvents/fish%20event5_thumb.jpg',
            'description' => "Fish returns to UK stages in Nov 2020 with his final album 'Weltschmerz' which is scheduled for release exactly 30 years after his first solo album.",
            'date' => '2021-11-15',
            'start_time' => '19:00:00',
            'finish_time' => '23:00:00',
            'club_id' => 4,
        ]);

        // basement 45 Event 1
        Event::create([
            'name' => 'Apocalypse Bristol ',
            'image' => 'https://static.wixstatic.com/media/e91259_1892ecb887b743c0b7b8307e9ba86984~mv2.jpg/v1/fill/w_1789,h_937,fp_0.50_0.50,q_90,usm_0.66_1.00_0.01/e91259_1892ecb887b743c0b7b8307e9ba86984~mv2.webp',
            'description' => "The biggest alternative night on the south coast is coming to Bristol for one night only! ",
            'date' => '2021-11-13',
            'start_time' => '22:00:00',
            'finish_time' => '04:00:00',
            'club_id' => 5,
        ]);

        // Thekla Event 1
        Event::create([
            'name' => 'Mr Jukes & Barney Artist',
            'image' => 'https://www.theklabristol.co.uk/wp-content/uploads/2021/05/MrJukesBarneyArtistLead-JoshShinner-1.jpg',
            'description' => "Mr Jukes and Barney Artist have shared details of a new collaborative album alongside their new single ‘Vibrate’.",
            'date' => '2021-11-28',
            'start_time' => '19:00:00',
            'finish_time' => '22:00:00',
            'club_id' => 7,
        ]);

        // Thekla Event 1
        Event::create([
            'name' => 'Sinead Harnett',
            'image' => 'https://www.theklabristol.co.uk/wp-content/uploads/2021/06/Dspi0qRVsAEWgrh-1.jpg',
            'description' => "London native Sinead Harnett, inspired at a young age by the likes of Whitney Houston and Michael Jackson, as well as Lauryn Hill’s role in Sister Act 2, got a foothold in the music industry through a series of collaborations during the early 2010s.",
            'date' => '2022-02-27',
            'start_time' => '19:00:00',
            'finish_time' => '22:00:00',
            'club_id' => 7,
        ]);

        // Lola Lo Event 1
        Event::create([
            'name' => 'Lost Saturdays',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzEcaTzgjb_fDRqgFYKksVX4Wo7FDVF3xciobmArOIyg&s=10',
            'description' => "We’re bringing straight fire to the island as LOST Saturdays touch down in Paradise!",
            'date' => '2021-11-27',
            'start_time' => '22:00:00',
            'finish_time' => '02:00:00',
            'club_id' => 8,
        ]);

        // Lola Lo Event 2
        Event::create([
            'name' => 'New Years Eve at Lolas',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7N_oSJcYsQbWsUUtkMnWNlzwK7Hqxt6wK0NSXFx6ZSA&s=10',
            'description' => "Welcome 2022 in Style with us at Lolas Playing the finest party classics as we go retro!!Party like its 1999!",
            'date' => '2021-12-31',
            'start_time' => '21:00:00',
            'finish_time' => '04:00:00',
            'club_id' => 8,
        ]);

        // Cosies Event 1
        Event::create([
            'name' => 'Stoned Soul Picnic w/ Steve Rice & Chris Farrell',
            'image' => 'https://static.headfirstbristol.co.uk/images/events/682/e68259_i95296_s5.jpg',
            'description' => "Esteemed selector Steve Rice invites Idle Hands' Chris Farrell to 'Stoned Soul Picnic' for a night of dancing and merriment.",
            'date' => '2021-11-12',
            'start_time' => '21:00:00',
            'finish_time' => '00:00:00',
            'club_id' => 9,
        ]);

        // The Black Swan Event 1
        Event::create([
            'name' => 'Stoned Soul Picnic w/ Steve Rice & Chris Farrell',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO9aUn5taAUccdVOzY1qO6u3e7Fxg1hWRIkNfQVUA_Wg&s=10',
            'description' => "The Black Swan - ❄JAMIE BOSTRON ❄ED COX & E-COLI ❄JAPPA B2B TROPIGWANA B2B MOWGLI ❄",
            'date' => '2021-11-12',
            'start_time' => '21:00:00',
            'finish_time' => '04:00:00',
            'club_id' => 10,
        ]);

        // The Crofters Rights Event 1
        Event::create([
            'name' => 'LEWSBERG',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu496BjU1j4HdFXGNYVlLYYFl4EQ4gy31-KVsRi9_Xs6dcFast3aneGgGeatLK&s',
            'description' => "One of the classiest european post-punk bands of our generation: Lewsberg, will be playing Bristol on the 16th June 2021 kindly copromoted with our mates at Fantôme and BLG.",
            'date' => '2021-11-12',
            'start_time' => '21:30:00',
            'finish_time' => '11:30:00',
            'club_id' => 11,
        ]);

        // Attic Bar Event 1
        Event::create([
            'name' => "Don't Flop: 13",
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzeP4gfLcC_49Q0ASUGV0OjJdm-ePXSYMUrOYtSfzgKDnHwliO9KDhHtCj1W8z&s=10',
            'description' => "A day of legendary rap battles live in Bristol! ◊ Main Event ◊ ▪️ CRAFT-D vs SHUFFLE T [Don't Flop Title Match]",
            'date' => '2021-11-13',
            'start_time' => '12:30:00',
            'finish_time' => '18:30:00',
            'club_id' => 12,
        ]);

        // Dojo Lounge Event 1
        Event::create([
            'name' => "Expansion",
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUPIWLd0aodq9yodB37Unz9XABEv2oehrkRDR7eexAiamx&s',
            'description' => "Expansion at The Dojo Bar, 12-16 Park Row, Bristol, United Kingdom",
            'date' => '2021-12-31',
            'start_time' => '21:00:00',
            'finish_time' => '04:00:00',
            'club_id' => 13,
        ]);

        // Strange brew Event 1
        Event::create([
            'name' => "Lala Lala",
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5VcJE86NLA1BNJccKNiNGwEMtKkuaYth22JVNZ_JQA12UfRY4kjvzF_22tstF&s',
            'description' => "The moniker of Chicago-based musician Lillie West, Lala Lala “makes direct indie rock that delivers an emotional punch” (DIY).",
            'date' => '2021-11-13',
            'start_time' => '18:30:00',
            'finish_time' => '22:30:00',
            'club_id' => 14,
        ]);

        // The island Event 1
        Event::create([
            'name' => "Lice",
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1bU7KpS0nvFGoVeNUjOzASxgGSE7mildTa1GYejCNItxd&s',
            'description' => "Lice £8.00 adv. -- 18+ Presented by 1% of One",
            'date' => '2021-11-27',
            'start_time' => '19:30:00',
            'finish_time' => '23:30:00',
            'club_id' => 15,
        ]);
    }
}
