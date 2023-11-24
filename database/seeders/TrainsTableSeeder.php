<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {

        for($i = 0; $i < 100; $i++){
            $train = new Train();
            $train->reference =$Faker->sentence(3, true);
            $train->slug = Str::slug($train->reference, '-');
            $train->Azienda=$Faker->word;
            $train->Stazione_di_Partenza = $Faker->city;
            $train->Stazione_di_arrivo = $Faker->city;
            $train->Orario_di_partenza = $Faker->time;
            $train->Orario_di_arrivo = $Faker->time;
            $train->Codice_treno = $Faker->numberBetween(10000, 90000);
            $train->In_orario = $Faker->word;
            $train->carrozze = $Faker->numberBetween(1, 10);
            $train->cancellato = $Faker->words(3, true);
            $train->save();


        }


    }
    private function generateSlug($reference){


        //1.
        $slug =  Str::slug($reference, '-');
        $original_slug = $slug;

        //2.
        $exists = Train::where('slug', $slug)->first();
        $c = 1;
        //3.
        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Train::where('slug', $slug)->first();

            $c++;
        }
        return $slug;
    }
}
