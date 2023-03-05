<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trains;
use Faker\Generator as Faker;

class train_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0 ; $i<40 ; $i++){

            $new_item = new Trains();
            $new_item->Azienda = $faker -> randomElement(['Trenitalia','Italo']);
            $new_item->Stazione_di_partenza  = $faker -> randomElement(['Monza','Milano','Pisa','Catania','Palermo']);
            $new_item->Giorno_partenza = $faker ->dayOfMonth();
            $new_item->Stazione_di_arrivo  = $faker -> randomElement(['Monza','Milano','Pisa','Catania','Palermo','Pisa']);
            $new_item->Orario_di_partenza  = $faker -> time();
            $new_item->Orario_di_arrivo  = $faker -> time();
            $new_item->Codice_Treno = $faker->bothify('?###??#');
            $new_item->Numero_Carrozze = $faker->randomNumber(2, true);
            $new_item->In_orario = $faker->numberBetween(0,1);
            $new_item->Cancellato =$faker->numberBetween(0,1);
            $new_item->save();
        }
        



    }
}
