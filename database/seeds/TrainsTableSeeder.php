<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_trains = [
            [
                'compagnia' => 'Trenitalia',
                'stPartenza' => 'Torino PN',
                'oraPartenza' => 08.30,
                'stArrivo' => 'Roma TRM',
                'oraArrivo' => 14.00
            ],
            [
                'compagnia' => 'Italo',
                'stPartenza' => 'Milano CNT',
                'oraPartenza' => 12.30,
                'stArrivo' => 'Firenze SMN',
                'oraArrivo' => 15.30
            ]
        ];

        foreach($_trains as $elem){
            $newTrain = new Train();
            $newTrain->compagnia = $elem['compagnia'];
            $newTrain->stPartenza = $elem['stPartenza'];
            $newTrain->oraPartenza = $elem['oraPartenza'];
            $newTrain->stArrivo = $elem['stArrivo'];
            $newTrain->oraArrivo = $elem['oraArrivo'];
            $newTrain->save();
        }
    }
}
