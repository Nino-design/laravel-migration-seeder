<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for ($i = 0; $i < 12; $i++) { 
            $train = new Train();
            $train->azienda = 'Trenitalia';
            $train->stazione_di_partenza = $faker->state();
            $train->stazione_di_arrivo = $faker->state();
            $train->orario_di_partenza = rand(1, 24);
            $train->orario_di_arrivo = rand(1, 24);
            $train->codice_treno = 'FR12345';
            $train->numero_carrozze = rand(1, 10);
            $train->in_orario = rand(0, 1);
            $train->cancellato = rand(0, 1);
    
            $train->save();
        }
     
    }
}
