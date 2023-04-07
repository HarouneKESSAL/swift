<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitéSeeder extends Seeder
{
    public function run()
    {
        DB::table('unités')->insert([
            [
                'nomUnite' => 'AIN TOUTA',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Batna',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'BEN AZZOUZ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Skikda',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],[
                'nomUnite' => 'DIRECTION GENERALE

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Alger',
                'codePostal' => '16094',
                'responsable' => 'Mr SAYAH Djellil Mohamed',
                'type' => 'Direction générale'
            ],
            [
                'nomUnite' => 'DEPOT ROUIBA

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Alger',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'Direction Commercial

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Alger',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'EL MALEH

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Aïn Témouchent',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'SIDI ABDELLI

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Tlemcen',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'SIDI ALI BENYOUB

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Sidi Bel Abbès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'PIERRE ORNEMENTALES-Usine Chabat

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Sidi Bel Abbès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'PIERRE ORNEMENTALES-Dhaya

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Sidi Bel Abbès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'PIERRE ORNEMENTALES-Sidi Lahcen

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Sidi Bel Abbès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'PIERRE ORNEMENTALES-Takbalet

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Sidi Bel Abbès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'PIERRE ORNEMENTALES'
            ],
            [
                'nomUnite' => 'DEPOT ES SENIA

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Oran',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'POUZZOLANE

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Aïn Témouchent',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'POUZZOLANE'
            ],
            [
                'nomUnite' => 'EL HACHIMIA Bouira',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Batna',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'EL KHROUB

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Constantine',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Carbonate de Calcium'
            ],
            [
                'nomUnite' => 'ELMA LABIOD

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Tébessa',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'EL KHROUB (Granulats)

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Constantine',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            [
                'nomUnite' => 'DEPOT EL KHROUB

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Constantine',
                'codePostal' => '25005',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Direction générale'
            ],
            [
                'nomUnite' => 'SI MUSTAPHA

                ',
                'adresse' => 'Cité Administrative Lot N° 135 Ouled Fayet-Alger',
                'ville' => 'Boumerdès',
                'codePostal' => '5002',
                'responsable' => 'Mr Fillali Fethi',
                'type' => 'Granulats'
            ],
            
            // Add more records as needed
        ]);
    }
}

