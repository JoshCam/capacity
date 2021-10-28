<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createClubs();
    }

    public function createClubs() {

        // Motion
        Club::create([
            'name' => 'Motion',
            'image' => 'https://media.thetab.com/blogs.dir/5/files/2020/05/97977488-247148733292943-6160042305823703040-n-scaled-e1589543956261.jpg',
            'description' => 'Ten years ago, Motion was nothing more than a skatepark hidden away in an industrial complex behind Temple Meads train station. Today, the enormous multi-room venue is Bristol’s biggest nightclub. With a cavernous main room at the heart of a sprawling complex of smaller spaces, outdoor areas and the adjacent Marble Factory venue, Motion provides a regular home for not just home-grown Bristol institutions such as The Blast and Futureboogie, but global mega-brands too.',
            'occupancy' => 0,
            'capacity' => 1600,
            'lat' => 51.4493462385265,
            'lng' => -2.575916398129784,
            'address' => '74-78 Avon St, Bristol BS2 0PX',
        ]);

        // Lakota
        Club::create([
            'name' => 'Lakota',
            'image' => 'https://eu-assets.simpleview-europe.com/bristol2014/imageresizer/?image=%2Fdmsimgs%2FLakota_Day_Stagee_372266743.jpg&action=ProductDetailNew',
            'description' => 'Lakota is a nightclub situated off Stokes Croft, Bristol. The building is the only remaining part of the Stokes Croft Brewery, and is part of the Stokes Croft Conservation Area.',
            'occupancy' => 0,
            'capacity' => 1200,
            'lat' => 51.46164074840383,
            'lng' => -2.589604385114776,
            'address' => "76 Upper York St, St Paul's, Bristol BS2 8QN",
        ]);

        // The Fleece
        Club::create([
            'name' => 'The Fleece',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/25/27/ae/the-fleece.jpg',
            'description' => 'Legendary live music venue The Fleece situated in the heart of Bristol offering live music and club nights 7 nights per week since 1982!',
            'occupancy' => 0,
            'capacity' => 450,
            'lat' => 51.45227575085397,
            'lng' => -2.589330819455274,
            'address' => "12 St Thomas St, Redcliffe, Bristol BS1 6JJ",
        ]);

        // SWX
        Club::create([
            'name' => 'SWX',
            'image' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/4E96/production/_119381102_mediaitem119381101.jpg',
            'description' => 'Big-name DJs and dance nights in superclub with live performers, inflatables and pyrotechnics.',
            'occupancy' => 0,
            'capacity' => 1100,
            'lat' => 51.45669850620307,
            'lng' => -2.592181167917093,
            'address' => "15 Nelson St, Bristol BS1 2JY",
        ]);

        // Basement 45
        Club::create([
            'name' => 'Basement 45',
            'image' => 'https://365bristol.com/userfiles/news/n_12164-1.jpg',
            'description' => 'Guest and resident DJs mix the beats in this, intimate vaulted nightclub with 2-dance floors.',
            'occupancy' => 0,
            'capacity' => 280,
            'lat' => 51.4535630606814,
            'lng' => -2.6008003628889593,
            'address' => "8 Frogmore St, Bristol BS1 5NA",
        ]);

        // OMG
        Club::create([
            'name' => 'OMG Club',
            'image' => 'https://i2-prod.bristolpost.co.uk/news/bristol-news/article4588750.ece/ALTERNATES/s615b/0_OMG.jpg',
            'description' => 'Known for our crazy and cheap nights out! Whether its student Wednesdays, with drinks from JUST £1. Or the BIG weekender where the atmosphere is INSANE! OMG is the ONLY place to be!',
            'occupancy' => 0,
            'capacity' => 350,
            'lat' => 51.45330129353256,
            'lng' => -2.601597086229434,
            'address' => "1-2 Frog Ln, Bristol BS1 5NF",
        ]);

        // Thekla
        Club::create([
            'name' => 'Thekla',
            'image' => 'https://ents24.imgix.net/image/000/299/713/41a05aa5b2e376adf30e64d5ec89133baa731441.jpg?auto=format&fp-x=0.515&fp-y=0.493&crop=focalpoint&w=1920&h=1080',
            'description' => "Thekla is a former cargo ship moored in the Mud Dock area of Bristol's Floating Harbour, England. The ship was built in Germany in 1958 and worked in the coastal trades.",
            'occupancy' => 0,
            'capacity' => 400,
            'lat' => 51.44895874166867,
            'lng' => -2.5941762544315035,
            'address' => "The Grove, East Mud Dock, Bristol BS1 4RB",
        ]);

        // Lola Lo
        Club::create([
            'name' => 'Lola Lo',
            'image' => 'https://img.tagvenue.com/upload/58/b7/9538-the-whole-venue-room.jpg',
            'description' => "Polynesian inspired Tiki tavern on Queen’s Rd serving luscious South Pacific style cocktails. Decked out with bamboo and tropical palms; a slice of island paradise with resident DJs, student nights, cocktail masterclasses and VIP tables.",
            'occupancy' => 0,
            'capacity' => 200,
            'lat' => 51.45658529323293,
            'lng' => -2.6071534278784445,
            'address' => "67 Queens Rd, Triangle W, Clifton, Bristol BS8 1QL",
        ]);

        // Cosies
        Club::create([
            'name' => 'Cosies',
            'image' => 'https://media.timeout.com/images/101900801/750/562/image.jpg',
            'description' => "A long-standing focus on all things dub and bass means this tiny basement has become synonymous with the soundsystem culture that helped birth Bristol’s club scene. The Sunday reggae sessions remain essential for those of a roots persuasion, while for those who like their riddims a little tougher, dancehall dons Ruffnek Diskotek are regularly on hand to cater to all your basement needs.",
            'occupancy' => 0,
            'capacity' => 250,
            'lat' => 51.46083864167233,
            'lng' => -2.586189366694632,
            'address' => "34 Portland Square, St Paul's, Bristol BS2 8RG",
        ]);

        // The Black Swan
        Club::create([
            'name' => 'The Black Swan',
            'image' => 'https://media.timeout.com/images/101900989/750/562/image.jpg',
            'description' => "The Black Swan is affectionately known as ‘The Dirty Duck’ by Bristol’s raving fraternity. Let’s be honest, it is a bit of a dive – but that’s also its charm. Who needs cocktails when you’ve got a monstrous sound system to lose your mind in front of, anyway?",
            'occupancy' => 0,
            'capacity' => 700,
            'lat' => 51.48940504562721,
            'lng' => -2.6228034881770124,
            'address' => "92 Stoke Ln, Bristol BS9 3SP",
        ]);

        // The Crofters' Rights
        Club::create([
            'name' => "The Crofters' Rights",
            'image' => 'https://media.timeout.com/images/105578393/750/562/image.jpg',
            'description' => "As you go in, this craft beer bar-come-pizza joint may seem 
                like your average trendy boozer. But head to large room at the back and
                you’ll find a much more party-ready atmosphere. You can jam a surprising 
                number of clubbers into the Crofters’ wood-lined interior – come here for 
                a very cosy, very crazy, very boozy night out. Just be careful on the 
                spiral staircase down to the loos, won't you?",
            'occupancy' => 0,
            'capacity' => 235,
            'lat' => 51.463809135285324,
            'lng' => -2.5899138010760043,
            'address' => "117-119 Stokes Croft, Cotham, Bristol BS1 3RW",
        ]);

        // Attic Bar
        Club::create([
            'name' => "Attic Bar",
            'image' => 'https://media.timeout.com/images/101900969/750/562/image.jpg',
            'description' => "Sharing an enormous courtyard with the Full Moon pub and 
                backpackers’ hostel, you don’t even need to step inside this Stokes Croft 
                venue for an idea of what to expect. Now resembling some sort of year-round 
                festival, complete with outside bars, shisha areas and an array of picnic 
                tables, Attic and its sister pub are hugely popular, its clientele drawn 
                in by an impressive musical menu of reggae, ska, drum ‘n’ bass and live bands.",
            'occupancy' => 0,
            'capacity' => 150,
            'lat' => 51.46023872940096,
            'lng' => -2.5904680427795865,
            'address' => "1 North St, St Paul's, Bristol BS1 3PR",
        ]);

        // Dojo Lounge
        Club::create([
            'name' => "Dojo Lounge",
            'image' => 'https://media.timeout.com/images/101900803/750/562/image.jpg',
            'description' => "This Bristol clubbing institution is hidden among a long line of shops and hairdressers on trendy Park Row. Many legendary venues have come and gone in these parts (R.I.P. Level), but one quick glance at the programme here will suffice to explain Dojo’s longevity. Thanks to its excellent drum ‘n’ bass nights, the club has stayed true to its roots.",
            'occupancy' => 0,
            'capacity' => 250,
            'lat' => 51.45535842067764,
            'lng' => -2.6004795832615843,
            'address' => "12-16 Park Row, Bristol BS1 5LJ",
        ]);

        // Strange Brew
        Club::create([
            'name' => "Strange Brew",
            'image' => 'https://media.timeout.com/images/105816885/750/562/image.jpg',
            'description' => "The dance music legends at Bristol party collective Dirtytalk are the business brains behind this new city centre contender. The crowd-funded space boasts a front room full of DIY art plus a bar, record shop and stage, as well as a ravier room out back for bigger, louder events.",
            'occupancy' => 0,
            'capacity' => 330,
            'lat' => 51.45636083781547,
            'lng' => -2.5924740826499275,
            'address' => "10-12 Fairfax St, Bristol BS1 3DB",
        ]);

        // The Island
        Club::create([
            'name' => "The Island",
            'image' => 'https://media.timeout.com/images/105578391/750/562/image.jpg',
            'description' => "By day, this former police station smack bang the city centre rents affordable studios to artists and hosts an array of fun-sounding creative classes. But The Island doesn’t switch off when the day crowd piles out at 5pm – it also hosts a winning array of club nights. Our top tip? Head to one of the parties in the original early 20th-century police cells that stretch under the main rooms.",
            'occupancy' => 0,
            'capacity' => 250,
            'lat' => 51.45699226549773,
            'lng' => -2.592740513472202,
            'address' => "Nelson St, Bristol BS1 2BE",
        ]);

    }
}
