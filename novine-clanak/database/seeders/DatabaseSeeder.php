<?php

namespace Database\Seeders;

use App\Models\Clanak;
use App\Models\Novine;
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

        Novine::truncate();
        User::truncate();
        Clanak::truncate();

        $user = User::factory()->create();

        $nov1 = Novine::create([
            'naziv' => 'NIN',
            'tip' => 'Nedeljnik'
        ]);
        $nov2 = Novine::create([
            'naziv' => 'Kurir',
            'tip' => 'Dnevne novine'
        ]);
        $nov3 = Novine::create([
            'naziv' => 'Danas',
            'tip' => 'Dnevne novine'
        ]);
        $nov4 = Novine::create([
            'naziv' => 'Grazia',
            'tip' => 'Magazin'
        ]);

        $clan1 = Clanak::create([
            'novine_id' => $nov3->id,
            'naslov' => 'Kagujevačke plate ispod republičkog proseka',
            'opis' => 'Kragujevačke plate su niže od republičkog proseka,
             za novembar 2021. godine prosečna neto plata iznosila je 68.089 dinara, 
             pokazuju najnoviji podaci Republičkog zavoda za statistiku (RZS) dok je u Šumadiji bila 64.275 dinara.',
            'user_id' => $user->id
        ]);
        $clan2 = Clanak::create([
            'novine_id' => $nov4->id,
            'naslov' => 'Kako odabrati tečni puder: Saveti koji su nam bili potrebni!',
            'opis' => 'Ustanovite koji vam je podton kože na osnovu poređenja lica sa belim papirom. Ukoliko vam koža deluje žućkasto, imate topli podton (preporuka su puderi sa oznakom W (warm). 
            Hladni podton imaju dame čije je lice plavkasto ili crvenkasto (za njih je puder sa oznakom C (cool). 
            Za neutralni ton, najbolji izbor je puder sa oznakom N (koža lica je između rozikaste i žućkaste).',
            'user_id' => $user->id
        ]);
        $clan3 = Clanak::create([
            'novine_id' => $nov1->id,
            'naslov' => 'Cena glasa prava sitnica',
            'opis' => 'Neko je izgleda procenio da sa 100 evra SNS neće moći da namakne očekivani broj glasova mlađih od 30 godina, 
            pa je Vučić brže-bolje iz najbržeg voza u modernoj istoriji Srbije najavio da će „za našu decu“- 
            naravno ako ostane na vlasti – do kraja ove godine da uplati još po 100 evra. Pa neka mladi odluče hoće li da menjaju vlast ili 
            još 100 evra posle pobede SNS-a. ',
            'user_id' => $user->id
        ]);
    }
}
