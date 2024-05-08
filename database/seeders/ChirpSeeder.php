<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_chirps = [
            [
                'text' => 'Sono il primo!',
                'user_id' => 1,
            ],
            [
                'text' => 'Ci sono anche io',
                'user_id' => 2,
            ],
            [
                'text' => 'Difendere confini e valori europei, ritirare le folli direttive su auto e casa, sostenere gli agricoltori, fermare le voglie di escalation militare di alcuni sconsiderati.
                Chi voterà la Lega a giugno ha una certezza: nessun governo con le sinistre, con socialisti, comunisti o Macron.',
                'user_id' => 3,
            ],
            [
                'text' => 'L\'UE deve difendere i confini europei, quindi anche Lampedusa, Ventimiglia e Trieste, cosa che non ha mai fatto. Deve ritirare regolamenti e direttive folli contro le auto e le case degli italiani, che sono un regalo alla Cina per le auto elettriche e alle banche per le tasse sulla casa. Deve aiutare agricoltori, allevatori e pescatori, smettendola con la diffusione e la propaganda di carni chimiche, farine di insetti o altre schifezze inventate da multinazionali straniere miliardarie.',
                'user_id' => 3,
            ],
            [
                'text' => 'EnTrAAAAAAAA?!?!?!?! NON penso ProPRIo!!!!!!!!',
                'user_id' => '4',
            ]
        ];
        foreach ($array_chirps as $chirp) {
            Chirp::create($chirp);
        }
    }
}
