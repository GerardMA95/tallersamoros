<?php

use Illuminate\Database\Seeder;

class ItemFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('item_feature')->get()->count() == 0){
            DB::table('item_feature')->insert([
                /* MOTOSIERRA - PESO */
                /* ECHO */
                [
                    'id_item' => '28',
                    'id_feature' => '23'
                ],
                [
                    'id_item' => '29',
                    'id_feature' => '23'
                ],
                [
                    'id_item' => '30',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '31',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '32',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '33',
                    'id_feature' => '31'
                ],
                [
                    'id_item' => '34',
                    'id_feature' => '35'
                ],
                [
                    'id_item' => '35',
                    'id_feature' => '36'
                ],
                [
                    'id_item' => '36',
                    'id_feature' => '40'
                ],
                [
                    'id_item' => '37',
                    'id_feature' => '40'
                ],
                [
                    'id_item' => '38',
                    'id_feature' => '38'
                ],
                [
                    'id_item' => '39',
                    'id_feature' => '46'
                ],
                [
                    'id_item' => '40',
                    'id_feature' => '48'
                ],
                [
                    'id_item' => '41',
                    'id_feature' => '48'
                ],
                [
                    'id_item' => '42',
                    'id_feature' => '60'
                ],
                [
                    'id_item' => '43',
                    'id_feature' => '60'
                ],
                [
                    'id_item' => '44',
                    'id_feature' => '45'
                ],
                [
                    'id_item' => '45',
                    'id_feature' => '47'
                ],
                [
                    'id_item' => '46',
                    'id_feature' => '47'
                ],
                [
                    'id_item' => '47',
                    'id_feature' => '62'
                ],
                [
                    'id_item' => '61',
                    'id_feature' => '62'
                ],
                /* MOTOSIERRA - CILINDRADA */
                /* ECHO */
                [
                    'id_item' => '28',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '29',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '30',
                    'id_feature' => '1380'
                ],
                [
                    'id_item' => '31',
                    'id_feature' => '1380'
                ],
                [
                    'id_item' => '32',
                    'id_feature' => '1380'
                ],
                [
                    'id_item' => '33',
                    'id_feature' => '1380'
                ],
                [
                    'id_item' => '34',
                    'id_feature' => '1434'
                ],
                [
                    'id_item' => '35',
                    'id_feature' => '1469'
                ],
                [
                    'id_item' => '36',
                    'id_feature' => '1416'
                ],
                [
                    'id_item' => '37',
                    'id_feature' => '1451'
                ],
                [
                    'id_item' => '38',
                    'id_feature' => '1469'
                ],
                [
                    'id_item' => '39',
                    'id_feature' => '1513'
                ],
                [
                    'id_item' => '40',
                    'id_feature' => '1613'
                ],
                [
                    'id_item' => '41',
                    'id_feature' => '1613'
                ],
                [
                    'id_item' => '42',
                    'id_feature' => '1709'
                ],
                [
                    'id_item' => '43',
                    'id_feature' => '1709'
                ],
                [
                    'id_item' => '44',
                    'id_feature' => '1495'
                ],
                [
                    'id_item' => '45',
                    'id_feature' => '1613'
                ],
                [
                    'id_item' => '46',
                    'id_feature' => '1613'
                ],
                [
                    'id_item' => '47',
                    'id_feature' => '1709'
                ],
                [
                    'id_item' => '61',
                    'id_feature' => '1709'
                ]
                /* DESBROZADORA - CILINDRADA */
                /* ECHO */
                ,[
                    'id_item' => '62',
                    'id_feature' => '1332'
                ],
                [
                    'id_item' => '63',
                    'id_feature' => '1332'
                ],
                [
                    'id_item' => '64',
                    'id_feature' => '1365'
                ],
                [
                    'id_item' => '65',
                    'id_feature' => '1365'
                ],
                [
                    'id_item' => '66',
                    'id_feature' => '1365'
                ],
                [
                    'id_item' => '67',
                    'id_feature' => '1365'
                ],
                [
                    'id_item' => '68',
                    'id_feature' => '1526'
                ],
                [
                    'id_item' => '69',
                    'id_feature' => '1454'
                ],
                [
                    'id_item' => '70',
                    'id_feature' => '1526'
                ],
                [
                    'id_item' => '71',
                    'id_feature' => '1613'
                ],
                [
                    'id_item' => '72',
                    'id_feature' => '1628'
                ],
                [
                    'id_item' => '73',
                    'id_feature' => '1693'
                ],
                [
                    'id_item' => '74',
                    'id_feature' => '1613'
                ],
                /* HONDA */
                [
                    'id_item' => '17',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '18',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '19',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '20',
                    'id_feature' => '2078'
                ],
                [
                    'id_item' => '75',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '76',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '77',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '78',
                    'id_feature' => '1461'
                ],
                [
                    'id_item' => '79',
                    'id_feature' => '1461'
                ],
                [
                    'id_item' => '80',
                    'id_feature' => '1461'
                ]
                /* DESBROZADORA - PESO */
                ,[
                    'id_item' => '62',
                    'id_feature' => '47'
                ],
                [
                    'id_item' => '63',
                    'id_feature' => '49'
                ],
                [
                    'id_item' => '64',
                    'id_feature' => '55'
                ],
                [
                    'id_item' => '65',
                    'id_feature' => '58'
                ],
                [
                    'id_item' => '66',
                    'id_feature' => '57'
                ],
                [
                    'id_item' => '67',
                    'id_feature' => '60'
                ],
                [
                    'id_item' => '68',
                    'id_feature' => '87'
                ],
                [
                    'id_item' => '69',
                    'id_feature' => '69'
                ],
                [
                    'id_item' => '70',
                    'id_feature' => '85'
                ],
                [
                    'id_item' => '71',
                    'id_feature' => '90'
                ],
                [
                    'id_item' => '72',
                    'id_feature' => '101'
                ],
                [
                    'id_item' => '73',
                    'id_feature' => '104'
                ],
                [
                    'id_item' => '74',
                    'id_feature' => '120'
                ],
                /* HONDA */
                [
                    'id_item' => '17',
                    'id_feature' => '500'
                ],
                [
                    'id_item' => '18',
                    'id_feature' => '620'
                ],
                [
                    'id_item' => '19',
                    'id_feature' => '703'
                ],
                [
                    'id_item' => '20',
                    'id_feature' => '846'
                ],
                [
                    'id_item' => '75',
                    'id_feature' => '54'
                ],
                [
                    'id_item' => '76',
                    'id_feature' => '65'
                ],
                [
                    'id_item' => '77',
                    'id_feature' => '62'
                ],
                [
                    'id_item' => '78',
                    'id_feature' => '76'
                ],
                [
                    'id_item' => '79',
                    'id_feature' => '73'
                ],
                [
                    'id_item' => '80',
                    'id_feature' => '108'
                ]
            ]);
            /* Pellenc */
            DB::table('item_feature')->insert([
                /* NOTE PRUNION150 */
                // Peso
                [
                    'id_item' => '56',
                    'id_feature' => '8'
                ],
                // Pot Max
                [
                    'id_item' => '56',
                    'id_feature' => '3835'
                ],
                // Apertura cuchilla
                [
                    'id_item' => '56',
                    'id_feature' => '3151'
                ],
                // Vel. Motor
                [
                    'id_item' => '56',
                    'id_feature' => '3403'
                ],
                /* NOTE PRUNION250 */
                // Peso
                [
                    'id_item' => '236',
                    'id_feature' => '8'
                ],
                // Pot Max
                [
                    'id_item' => '236',
                    'id_feature' => '3835'
                ],
                // Apertura cuchilla
                [
                    'id_item' => '236',
                    'id_feature' => '3151'
                ],
                // Vel. Motor
                [
                    'id_item' => '236',
                    'id_feature' => '3403'
                ],
                /* NOTE VINION */
                // Peso
                [
                    'id_item' => '55',
                    'id_feature' => '7'
                ],
                // Pot Max
                [
                    'id_item' => '55',
                    'id_feature' => '3749'
                ],
                // Apertura cuchilla
                [
                    'id_item' => '55',
                    'id_feature' => '3141'
                ],
                // Vel. Motor
                [
                    'id_item' => '55',
                    'id_feature' => '3403'
                ],
                /* NOTE FIXION */
                // Peso
                [
                    'id_item' => '48',
                    'id_feature' => '9'
                ],

                /* NOTE CULTIVION */
                // Peso
                [
                    'id_item' => '49',
                    'id_feature' => '31'
                ],
                // Pot Max
                [
                    'id_item' => '49',
                    'id_feature' => '3700'
                ],
                /* NOTE SELION M12 */
                // Peso
                [
                    'id_item' => '50',
                    'id_feature' => '17'
                ],
                // Pot Max
                [
                    'id_item' => '50',
                    'id_feature' => '3782'
                ],
                // Vel. Motor
                [
                    'id_item' => '50',
                    'id_feature' => '3247'
                ],
                /* NOTE SELION C21 */
                // Peso
                [
                    'id_item' => '51',
                    'id_feature' => '20'
                ],
                // Pot Max
                [
                    'id_item' => '51',
                    'id_feature' => '3862'
                ],
                // Vel. Motor
                [
                    'id_item' => '51',
                    'id_feature' => '3255'
                ],
                // Long. guia
                [
                    'id_item' => '51',
                    'id_feature' => '3044'
                ],
                /* NOTE SELION P220/300 */
                // Peso
                [
                    'id_item' => '52',
                    'id_feature' => '34'
                ],
                // Pot Max
                [
                    'id_item' => '52',
                    'id_feature' => '3782'
                ],
                // Vel. Motor
                [
                    'id_item' => '52',
                    'id_feature' => '3247'
                ],
                // Long. guia
                [
                    'id_item' => '52',
                    'id_feature' => '3039'
                ],
                [
                    'id_item' => '52',
                    'id_feature' => '4082'
                ],
                /* NOTE SELION P130 */
                // Peso
                [
                    'id_item' => '234',
                    'id_feature' => '28'
                ],
                // Pot Max
                [
                    'id_item' => '234',
                    'id_feature' => '3782'
                ],
                // Vel. Motor
                [
                    'id_item' => '234',
                    'id_feature' => '3247'
                ],
                // Long. guia
                [
                    'id_item' => '234',
                    'id_feature' => '3039'
                ],
                [
                    'id_item' => '234',
                    'id_feature' => '4065'
                ],
                /* NOTE SELION P180 */
                // Peso
                [
                    'id_item' => '235',
                    'id_feature' => '28'
                ],
                // Pot Max
                [
                    'id_item' => '235',
                    'id_feature' => '3782'
                ],
                // Vel. Motor
                [
                    'id_item' => '235',
                    'id_feature' => '3247'
                ],
                // Long. guia
                [
                    'id_item' => '235',
                    'id_feature' => '3039'
                ],
                [
                    'id_item' => '235',
                    'id_feature' => '4070'
                ],
                /* NOTE OLIVION P230 */
                // Peso
                [
                    'id_item' => '53',
                    'id_feature' => '25'
                ],
                // Pot Max
                [
                    'id_item' => '53',
                    'id_feature' => '3700'
                ],
                // Long.
                [
                    'id_item' => '53',
                    'id_feature' => '4075'
                ],
                /* NOTE EXCELION2000 */
                // Peso
                [
                    'id_item' => '54',
                    'id_feature' => '54'
                ],
                // Pot Max
                [
                    'id_item' => '54',
                    'id_feature' => '3862'
                ],
                // Long.
                [
                    'id_item' => '54',
                    'id_feature' => '3255'
                ],
                /* NOTE RASIONBASIC */
                // Peso
                [
                    'id_item' => '213',
                    'id_feature' => '250'
                ],
                // Pot Max
                [
                    'id_item' => '213',
                    'id_feature' => '3772'
                ],
                // Anch corte
                [
                    'id_item' => '213',
                    'id_feature' => '2893'
                ],
                /* NOTE AIRION2 */
                // Peso
                [
                    'id_item' => '214',
                    'id_feature' => '25'
                ],
                // Pot Max
                [
                    'id_item' => '214',
                    'id_feature' => '3756'
                ]
            ]);
        } else { echo "\e[31mTable item_feature is not empty, therefore NOT "; }
    }
}
