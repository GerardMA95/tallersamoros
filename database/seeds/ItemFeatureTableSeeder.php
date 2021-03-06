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
                ],
                /* MOTOR */
                [
                    'id_item' => '201',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '201',
                    'id_feature' => '3049'
                ],
                [
                    'id_item' => '202',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '202',
                    'id_feature' => '3054'
                ],
                /* NOTE SOPLADOR */
                /* PB250 */
                [
                    'id_item' => '26' ,
                    'id_feature' => '43',
                ],
                [
                    'id_item' => '26' ,
                    'id_feature' => '1365',
                ],
                /* PB251 */
                [
                    'id_item' => '27' ,
                    'id_feature' => '45',
                ],
                [
                    'id_item' => '27' ,
                    'id_feature' => '1365',
                ],
                /* PB255ES */
                [
                    'id_item' => '179' ,
                    'id_feature' => '48',
                ],
                [
                    'id_item' => '179' ,
                    'id_feature' => '1365',
                ],
                /* ES250ES */
                [
                    'id_item' => '180' ,
                    'id_feature' => '57',
                ],
                [
                    'id_item' => '180' ,
                    'id_feature' => '1365',
                ],
                /* PB580 */
                [
                    'id_item' => '181' ,
                    'id_feature' => '103',
                ],
                [
                    'id_item' => '181' ,
                    'id_feature' => '1693',
                ],
                /* PB760 */
                [
                    'id_item' => '182' ,
                    'id_feature' => '119',
                ],
                [
                    'id_item' => '182' ,
                    'id_feature' => '1744',
                ],
                /* PB770 */
                [
                    'id_item' => '183' ,
                    'id_feature' => '110',
                ],
                [
                    'id_item' => '183' ,
                    'id_feature' => '1744',
                ],
                /* NOTE PODRADORA */
                /* PPF236ES */
                [
                    'id_item' => '203',
                    'id_feature' => '58'
                ],
                [
                    'id_item' => '203',
                    'id_feature' => '3039'
                ],
                /* PPT265ES */
                [
                    'id_item' => '204',
                    'id_feature' => '80'
                ],
                [
                    'id_item' => '204',
                    'id_feature' => '3044'
                ],
                /* NOTE DESBROZADORA */
                /* SRM222ESL */
                [
                    'id_item' => '62',
                    'id_feature' => '47'
                ],
                [
                    'id_item' => '62',
                    'id_feature' => '1323'
                ],
                /* SRM222ESU */
                [
                    'id_item' => '63',
                    'id_feature' => '49'
                ],
                [
                    'id_item' => '63',
                    'id_feature' => '1365'
                ],
                /* SRM2620ESL */
                [
                    'id_item' => '64',
                    'id_feature' => '56'
                ],
                [
                    'id_item' => '64',
                    'id_feature' => '1365'
                ],
                /* SRM2620ESU */
                [
                    'id_item' => '65',
                    'id_feature' => '58'
                ],
                [
                    'id_item' => '65',
                    'id_feature' => '1365'
                ],
                /* SRM2620TESL */
                [
                    'id_item' => '66',
                    'id_feature' => '58'
                ],
                [
                    'id_item' => '66',
                    'id_feature' => '1365'
                ],
                /* SRM2620TESU */
                [
                    'id_item' => '67',
                    'id_feature' => '60'
                ],
                [
                    'id_item' => '67',
                    'id_feature' => '1365'
                ],
                /* SRM420TESU */
                [
                    'id_item' => '68',
                    'id_feature' => '87'
                ],
                [
                    'id_item' => '68',
                    'id_feature' => '1526'
                ],
                /* SRM350ESU */
                [
                    'id_item' => '69',
                    'id_feature' => '69'
                ],
                [
                    'id_item' => '69',
                    'id_feature' => '1454'
                ],
                /* SRM420ESU */
                [
                    'id_item' => '70',
                    'id_feature' => '85'
                ],
                [
                    'id_item' => '70',
                    'id_feature' => '1526'
                ],
                /* SRM520ESU */
                [
                    'id_item' => '71',
                    'id_feature' => '90'
                ],
                [
                    'id_item' => '71',
                    'id_feature' => '1613'
                ],
                /* BCLS510ES */
                [
                    'id_item' => '72',
                    'id_feature' => '101'
                ],
                [
                    'id_item' => '72',
                    'id_feature' => '1628'
                ],
                /* BCLS580 */
                [
                    'id_item' => '73',
                    'id_feature' => '104'
                ],
                [
                    'id_item' => '73',
                    'id_feature' => '1693'
                ],
                /* RM520ES */
                [
                    'id_item' => '74',
                    'id_feature' => '120'
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
                    'id_item' => '17',
                    'id_feature' => '4102'
                ],
                [
                    'id_item' => '18',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '18',
                    'id_feature' => '4102'
                ],
                [
                    'id_item' => '19',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '19',
                    'id_feature' => '4102'
                ],
                [
                    'id_item' => '20',
                    'id_feature' => '2078'
                ],
                [
                    'id_item' => '20',
                    'id_feature' => '4098'
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
                /* MOTOAIXADES */
                /* FG205 */
                [
                    'id_item' => '109',
                    'id_feature' => '4090'
                ],
                [
                    'id_item' => '109',
                    'id_feature' => '1601'
                ],
                [
                    'id_item' => '109',
                    'id_feature' => '205'
                ],
                /* F220 */
                [
                    'id_item' => '110',
                    'id_feature' => '4091'
                ],
                [
                    'id_item' => '110',
                    'id_feature' => '1681'
                ],
                [
                    'id_item' => '110',
                    'id_feature' => '300'
                ],
                /* FG320 */
                [
                    'id_item' => '111',
                    'id_feature' => '4094'
                ],
                [
                    'id_item' => '111',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '111',
                    'id_feature' => '550'
                ],
                /* FJ500STD */
                [
                    'id_item' => '112',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '112',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '112',
                    'id_feature' => '450'
                ],
                /* FJ500DLX */
                [
                    'id_item' => '113',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '113',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '113',
                    'id_feature' => '500'
                ],
                /* F506 */
                [
                    'id_item' => '114',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '114',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '114',
                    'id_feature' => '530'
                ],
                /* F510 */
                [
                    'id_item' => '115',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '115',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '115',
                    'id_feature' => '540'
                ],
                /* F560 */
                [
                    'id_item' => '116',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '116',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '116',
                    'id_feature' => '580'
                ],
                /* FF300 */
                [
                    'id_item' => '117',
                    'id_feature' => '4091'
                ],
                [
                    'id_item' => '117',
                    'id_feature' => '1681'
                ],
                [
                    'id_item' => '117',
                    'id_feature' => '510'
                ],
                /* FF500 */
                [
                    'id_item' => '118',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '118',
                    'id_feature' => '1901'
                ],
                [
                    'id_item' => '118',
                    'id_feature' => '714'
                ],
                /* FR750 */
                [
                    'id_item' => '119',
                    'id_feature' => '4090'
                ],
                [
                    'id_item' => '119',
                    'id_feature' => '1937'
                ],
                [
                    'id_item' => '119',
                    'id_feature' => '754'
                ],
                /* F560M */
                [
                    'id_item' => '120',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '120',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '120',
                    'id_feature' => '882'
                ],
                /* CORTACESPED */
                /* HRE330 */
                [
                    'id_item' => '1',
                    'id_feature' => '110'
                ],
                [
                    'id_item' => '1',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '1',
                    'id_feature' => '3772'
                ],
                /* HRE370 */
                [
                    'id_item' => '2',
                    'id_feature' => '150'
                ],
                [
                    'id_item' => '2',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '2',
                    'id_feature' => '3792'
                ],
                /* IZY41P */
                [
                    'id_item' => '3',
                    'id_feature' => '290'
                ],
                [
                    'id_item' => '3',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '3',
                    'id_feature' => '1901'
                ],
                /* IZY46P */
                [
                    'id_item' => '4',
                    'id_feature' => '300'
                ],
                [
                    'id_item' => '4',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '4',
                    'id_feature' => '1901'
                ],
                /* IZY41S */
                [
                    'id_item' => '5',
                    'id_feature' => '310'
                ],
                [
                    'id_item' => '5',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '5',
                    'id_feature' => '1901'
                ],
                /* IZY46S */
                [
                    'id_item' => '6',
                    'id_feature' => '320'
                ],
                [
                    'id_item' => '6',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '6',
                    'id_feature' => '1901'
                ],
                /* IZY53S */
                [
                    'id_item' => '7',
                    'id_feature' => '362'
                ],
                [
                    'id_item' => '7',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '7',
                    'id_feature' => '1901'
                ],
                /* IZY53VYE */
                [
                    'id_item' => '8',
                    'id_feature' => '413'
                ],
                [
                    'id_item' => '8',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '8',
                    'id_feature' => '1901'
                ],
                /* HRX476HYE */
                [
                    'id_item' => '10',
                    'id_feature' => '440'
                ],
                [
                    'id_item' => '10',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '10',
                    'id_feature' => '1901'
                ],
                /* HRX476VYE */
                [
                    'id_item' => '9',
                    'id_feature' => '420'
                ],
                [
                    'id_item' => '9',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '9',
                    'id_feature' => '1901'
                ],
                /* HRX537HYE */
                [
                    'id_item' => '12',
                    'id_feature' => '448'
                ],
                [
                    'id_item' => '12',
                    'id_feature' => '4097'
                ],
                [
                    'id_item' => '12',
                    'id_feature' => '1928'
                ],
                /* HRX537VYE */
                [
                    'id_item' => '11',
                    'id_feature' => '439'
                ],
                [
                    'id_item' => '11',
                    'id_feature' => '4097'
                ],
                [
                    'id_item' => '11',
                    'id_feature' => '1928'
                ],
                /* HRD536HXE */
                [
                    'id_item' => '14',
                    'id_feature' => '493'
                ],
                [
                    'id_item' => '14',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '14',
                    'id_feature' => '1904'
                ],
                /* HRH536HXE */
                [
                    'id_item' => '15',
                    'id_feature' => '602'
                ],
                [
                    'id_item' => '15',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '15',
                    'id_feature' => '1904'
                ],
                /* HRH536QXE */
                [
                    'id_item' => '16',
                    'id_feature' => '581'
                ],
                [
                    'id_item' => '16',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '16',
                    'id_feature' => '1904'
                ],
                /* HRS536SKEA */
                [
                    'id_item' => '81',
                    'id_feature' => '311'
                ],
                [
                    'id_item' => '81',
                    'id_feature' => '4095'
                ],
                [
                    'id_item' => '81',
                    'id_feature' => '1901'
                ],
                /* HF1211H */
                [
                    'id_item' => '84',
                    'id_feature' => '887'
                ],
                [
                    'id_item' => '84',
                    'id_feature' => '4098'
                ],
                [
                    'id_item' => '84',
                    'id_feature' => '2078'
                ],
                /* HF2315HM */
                [
                    'id_item' => '86',
                    'id_feature' => '925'
                ],
                [
                    'id_item' => '86',
                    'id_feature' => '4099'
                ],
                [
                    'id_item' => '86',
                    'id_feature' => '2271'
                ],
                /* HF2417HM */
                [
                    'id_item' => '87',
                    'id_feature' => '944'
                ],
                [
                    'id_item' => '87',
                    'id_feature' => '4100'
                ],
                [
                    'id_item' => '87',
                    'id_feature' => '2271'
                ],
                /* HF2622HM */
                [
                    'id_item' => '88',
                    'id_feature' => '965'
                ],
                [
                    'id_item' => '88',
                    'id_feature' => '4101'
                ],
                [
                    'id_item' => '88',
                    'id_feature' => '2429'
                ],
                /* MiimoHRM310 */
                [
                    'id_item' => '89',
                    'id_feature' => '116'
                ],
                [
                    'id_item' => '89',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '89',
                    'id_feature' => '2855'
                ],
                [
                    'id_item' => '89',
                    'id_feature' => '3218'
                ],
                /* MiimoHRM520 */
                [
                    'id_item' => '90',
                    'id_feature' => '119'
                ],
                [
                    'id_item' => '90',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '90',
                    'id_feature' => '2855'
                ],
                [
                    'id_item' => '90',
                    'id_feature' => '3218'
                ],
                /* MiimoHRM3000 */
                [
                    'id_item' => '91',
                    'id_feature' => '138'
                ],
                [
                    'id_item' => '91',
                    'id_feature' => '4096'
                ],
                [
                    'id_item' => '91',
                    'id_feature' => '2858'
                ],
                [
                    'id_item' => '91',
                    'id_feature' => '3218'
                ],
                /* DESBROZADORA */
                /* UMK425LE */
                [
                    'id_item' => '75',
                    'id_feature' => '62'
                ],
                [
                    'id_item' => '75',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '75',
                    'id_feature' => '4088'
                ],
                /* UMK425UE */
                [
                    'id_item' => '76',
                    'id_feature' => '65'
                ],
                [
                    'id_item' => '76',
                    'id_feature' => '1361'
                ],
                [
                    'id_item' => '76',
                    'id_feature' => '4088'
                ],
                /* UMK435LE */
                [
                    'id_item' => '79',
                    'id_feature' => '73'
                ],
                [
                    'id_item' => '79',
                    'id_feature' => '1469'
                ],
                [
                    'id_item' => '79',
                    'id_feature' => '4089'
                ],
                /* UMK435UE */
                [
                    'id_item' => '78',
                    'id_feature' => '76'
                ],
                [
                    'id_item' => '78',
                    'id_feature' => '1469'
                ],
                [
                    'id_item' => '78',
                    'id_feature' => '4089'
                ],
                /* UMR435LE */
                [
                    'id_item' => '80',
                    'id_feature' => '108'
                ],
                [
                    'id_item' => '80',
                    'id_feature' => '1469'
                ],
                [
                    'id_item' => '80',
                    'id_feature' => '4089'
                ],
                /* HHTE38BE */
                [
                    'id_item' => '102',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '102',
                    'id_feature' => '4096'
                ],
                /* KITHHTE38BE_HBP20AH_HBC210WE */
                [
                    'id_item' => '103',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '103',
                    'id_feature' => '4096'
                ],
                /* KITHHTE38BE_HBP20AH_HBC550WE */
                [
                    'id_item' => '104',
                    'id_feature' => '30'
                ],
                [
                    'id_item' => '104',
                    'id_feature' => '4096'
                ],
                /* REGENERADOR */
                /* RH370 */
                [
                    'id_item' => '82',
                    'id_feature' => '350'
                ],
                [
                    'id_item' => '82',
                    'id_feature' => '4094'
                ],
                [
                    'id_item' => '82',
                    'id_feature' => '1904'
                ],
                /* RH390 */
                [
                    'id_item' => '23',
                    'id_feature' => '435'
                ],
                [
                    'id_item' => '23',
                    'id_feature' => '4094'
                ],
                [
                    'id_item' => '23',
                    'id_feature' => '1904'
                ],
                /* RH480 */
                [
                    'id_item' => '24',
                    'id_feature' => '470'
                ],
                [
                    'id_item' => '24',
                    'id_feature' => '4093'
                ],
                [
                    'id_item' => '24',
                    'id_feature' => '1904'
                ],
                /* RH700 */
                [
                    'id_item' => '25',
                    'id_feature' => '650'
                ],
                [
                    'id_item' => '25',
                    'id_feature' => '4103'
                ],
                [
                    'id_item' => '25',
                    'id_feature' => '1937'
                ],
                /* NOTE BARREDORA */
                /* FG201B */
                [
                    'id_item' => '22',
                    'id_feature' => '435'
                ],
                [
                    'id_item' => '22',
                    'id_feature' => '4090'
                ],
                [
                    'id_item' => '22',
                    'id_feature' => '1601'
                ],
                /* NOTE ASPIRADOR */
                /* AS100 */
                [
                    'id_item' => '83',
                    'id_feature' => '680'
                ],
                [
                    'id_item' => '83',
                    'id_feature' => '1904'
                ],
                [
                    'id_item' => '83',
                    'id_feature' => '4093'
                ],
                /* NOTE CORTASETO */
                /* HHH25S75E */
                [
                    'id_item' => '92',
                    'id_feature' => '58'
                ],
                [
                    'id_item' => '92',
                    'id_feature' => '4088'
                ],
                [
                    'id_item' => '92',
                    'id_feature' => '1361'
                ],
                /* HHH25D60E */
                [
                    'id_item' => '93',
                    'id_feature' => '63'
                ],
                [
                    'id_item' => '93',
                    'id_feature' => '4088'
                ],
                [
                    'id_item' => '93',
                    'id_feature' => '1361'
                ],
                /* HHH25D75E */
                [
                    'id_item' => '94',
                    'id_feature' => '66'
                ],
                [
                    'id_item' => '94',
                    'id_feature' => '4088'
                ],
                [
                    'id_item' => '94',
                    'id_feature' => '1361'
                ],
                /* HHHE61LE */
                [
                    'id_item' => '99' ,
                    'id_feature' => '28',
                ],
                [
                    'id_item' => '99',
                    'id_feature' => '4096'
                ],
                /* KITHHHE61LE_HBP20AH_HBC210WE */
                [
                    'id_item' => '100' ,
                    'id_feature' => '28',
                ],
                [
                    'id_item' => '100',
                    'id_feature' => '4096'
                ],
                /* KITHHHE61LE_HBP20AH_HBC550WE */
                [
                    'id_item' => '101' ,
                    'id_feature' => '28',
                ],
                [
                    'id_item' => '101',
                    'id_feature' => '4096'
                ],
                /* NOTE SOPLADOR */
                /* HHB25 */
                [
                    'id_item' => '95' ,
                    'id_feature' => '45',
                ],
                [
                    'id_item' => '95',
                    'id_feature' => '4088'
                ],
                [
                    'id_item' => '95',
                    'id_feature' => '1361'
                ],
                /* HHBE81BE */
                [
                    'id_item' => '96' ,
                    'id_feature' => '23',
                ],
                [
                    'id_item' => '96',
                    'id_feature' => '4096'
                ],
                /* KITHHBE81BE_HBP40AH_HBC210WE */
                [
                    'id_item' => '97' ,
                    'id_feature' => '23',
                ],
                [
                    'id_item' => '97',
                    'id_feature' => '4096'
                ],
                /* KITHHBE81BE_HBP40AH_HBC550WE */
                [
                    'id_item' => '98' ,
                    'id_feature' => '23',
                ],
                [
                    'id_item' => '98',
                    'id_feature' => '4096'
                ],
                /* NOTE Baterias */
                /* HBP20AH */
                [
                    'id_item' => '105' ,
                    'id_feature' => '12',
                ],
                /* HBP40AH */
                [
                    'id_item' => '106' ,
                    'id_feature' => '22',
                ],
                /* NOTE CARRETILLA */
                /* HP310 */
                [
                    'id_item' => '170' ,
                    'id_feature' => '890',
                ],
                [
                    'id_item' => '170' ,
                    'id_feature' => '4094',
                ],
                [
                    'id_item' => '170' ,
                    'id_feature' => '1904',
                ],
                /* HP490 */
                [
                    'id_item' => '172' ,
                    'id_feature' => '950',
                ],
                [
                    'id_item' => '172' ,
                    'id_feature' => '4104',
                ],
                [
                    'id_item' => '172' ,
                    'id_feature' => '1937',
                ],
                /* HP500 */
                [
                    'id_item' => '173' ,
                    'id_feature' => '907',
                ],
                [
                    'id_item' => '173' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '173' ,
                    'id_feature' => '1904',
                ],
                /* NOTE MOTOSOLDADORA */
                /* EW120 */
                [
                    'id_item' => '149' ,
                    'id_feature' => '400',
                ],
                [
                    'id_item' => '149' ,
                    'id_feature' => '4103',
                ],
                [
                    'id_item' => '149' ,
                    'id_feature' => '1937',
                ],
                /* EW170 */
                [
                    'id_item' => '150' ,
                    'id_feature' => '710',
                ],
                [
                    'id_item' => '150' ,
                    'id_feature' => '4105',
                ],
                [
                    'id_item' => '150' ,
                    'id_feature' => '2011',
                ],
                /* EW200 */
                [
                    'id_item' => '151' ,
                    'id_feature' => '710',
                ],
                [
                    'id_item' => '151' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '151' ,
                    'id_feature' => '2130',
                ],
                /* NOTE GENERADORES */
                /* EU10 */
                [
                    'id_item' => '152' ,
                    'id_feature' => '130',
                ],
                [
                    'id_item' => '152' ,
                    'id_feature' => '4092',
                ],
                [
                    'id_item' => '152' ,
                    'id_feature' => '1601',
                ],
                /* EU20 */
                [
                    'id_item' => '153' ,
                    'id_feature' => '207',
                ],
                [
                    'id_item' => '153' ,
                    'id_feature' => '4107',
                ],
                [
                    'id_item' => '153' ,
                    'id_feature' => '1839',
                ],
                /* EU30iFHandy */
                [
                    'id_item' => '154' ,
                    'id_feature' => '352',
                ],
                [
                    'id_item' => '154' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '154' ,
                    'id_feature' => '1904',
                ],
                /* EU30isF */
                [
                    'id_item' => '155' ,
                    'id_feature' => '590',
                ],
                [
                    'id_item' => '155' ,
                    'id_feature' => '4103',
                ],
                [
                    'id_item' => '155' ,
                    'id_feature' => '1937',
                ],
                /* EU70isF */
                [
                    'id_item' => '156' ,
                    'id_feature' => '796',
                ],
                [
                    'id_item' => '156' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '156' ,
                    'id_feature' => '2130',
                ],
                /* EM30 */
                [
                    'id_item' => '135' ,
                    'id_feature' => '340',
                ],
                [
                    'id_item' => '135' ,
                    'id_feature' => '4103',
                ],
                [
                    'id_item' => '135' ,
                    'id_feature' => '1937',
                ],
                /* EG4500CL */
                [
                    'id_item' => '136' ,
                    'id_feature' => '719',
                ],
                [
                    'id_item' => '136' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '136' ,
                    'id_feature' => '2130',
                ],
                /* EG5500CL */
                [
                    'id_item' => '137' ,
                    'id_feature' => '725',
                ],
                [
                    'id_item' => '137' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '137' ,
                    'id_feature' => '2130',
                ],
                /* EM5500AE */
                [
                    'id_item' => '138' ,
                    'id_feature' => '752',
                ],
                [
                    'id_item' => '138' ,
                    'id_feature' => '4108',
                ],
                [
                    'id_item' => '138' ,
                    'id_feature' => '2130',
                ],
                /* EP3000 */
                [
                    'id_item' => '139' ,
                    'id_feature' => '380',
                ],
                [
                    'id_item' => '139' ,
                    'id_feature' => '4104',
                ],
                [
                    'id_item' => '139' ,
                    'id_feature' => '1937',
                ],
                /* EC3000 */
                [
                    'id_item' => '140' ,
                    'id_feature' => '380',
                ],
                [
                    'id_item' => '140' ,
                    'id_feature' => '4103',
                ],
                [
                    'id_item' => '140' ,
                    'id_feature' => '2011',
                ],
                /* EC3600 */
                [
                    'id_item' => '141' ,
                    'id_feature' => '580',
                ],
                [
                    'id_item' => '141' ,
                    'id_feature' => '4105',
                ],
                [
                    'id_item' => '141' ,
                    'id_feature' => '2011',
                ],
                /* EC3600AE */
                [
                    'id_item' => '142' ,
                    'id_feature' => '650',
                ],
                [
                    'id_item' => '142' ,
                    'id_feature' => '4105',
                ],
                [
                    'id_item' => '142' ,
                    'id_feature' => '2130',
                ],
                /* EC5000 */
                [
                    'id_item' => '143' ,
                    'id_feature' => '710',
                ],
                [
                    'id_item' => '143' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '143' ,
                    'id_feature' => '2130',
                ],
                /* EC5000AE */
                [
                    'id_item' => '144' ,
                    'id_feature' => '722',
                ],
                [
                    'id_item' => '144' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '144' ,
                    'id_feature' => '2130',
                ],
                /* ECT7000 */
                [
                    'id_item' => '145' ,
                    'id_feature' => '714',
                ],
                [
                    'id_item' => '145' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '145' ,
                    'id_feature' => '2130',
                ],
                /* ECT7000AE */
                [
                    'id_item' => '146' ,
                    'id_feature' => '726',
                ],
                [
                    'id_item' => '146' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '146' ,
                    'id_feature' => '2130',
                ],
                /* ECT7000P */
                [
                    'id_item' => '147' ,
                    'id_feature' => '732',
                ],
                [
                    'id_item' => '147' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '147' ,
                    'id_feature' => '2130',
                ],
                /* ECMT7000 */
                [
                    'id_item' => '148' ,
                    'id_feature' => '768',
                ],
                [
                    'id_item' => '148' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '148' ,
                    'id_feature' => '2130',
                ],
                /* NOTE Biotrituradoras */
                /* BIO3000 */
                [
                    'id_item' => '157' ,
                    'id_feature' => '235',
                ],
                [
                    'id_item' => '157' ,
                    'id_feature' => '4096',
                ],
                [
                    'id_item' => '157' ,
                    'id_feature' => '3962',
                ],
                /* BIO175E */
                [
                    'id_item' => '158' ,
                    'id_feature' => '530',
                ],
                [
                    'id_item' => '158' ,
                    'id_feature' => '4096',
                ],
                [
                    'id_item' => '158' ,
                    'id_feature' => '3882',
                ],
                /* BIO180 */
                [
                    'id_item' => '159' ,
                    'id_feature' => '600',
                ],
                [
                    'id_item' => '159' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '159' ,
                    'id_feature' => '1904',
                ],
                /* BIO320 */
                [
                    'id_item' => '160' ,
                    'id_feature' => '816',
                ],
                [
                    'id_item' => '160' ,
                    'id_feature' => '4105',
                ],
                [
                    'id_item' => '160' ,
                    'id_feature' => '2011',
                ],
                /* BIO375 */
                [
                    'id_item' => '161' ,
                    'id_feature' => '935',
                ],
                [
                    'id_item' => '161' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '161' ,
                    'id_feature' => '2130',
                ],
                /* BIO375FE */
                [
                    'id_item' => '162' ,
                    'id_feature' => '971',
                ],
                [
                    'id_item' => '162' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '162' ,
                    'id_feature' => '2130',
                ],
                /* BIO510 */
                [
                    'id_item' => '163' ,
                    'id_feature' => '1060',
                ],
                [
                    'id_item' => '163' ,
                    'id_feature' => '4106',
                ],
                [
                    'id_item' => '163' ,
                    'id_feature' => '2130',
                ],
                /* BIO650 */
                [
                    'id_item' => '165' ,
                    'id_feature' => '1170',
                ],
                [
                    'id_item' => '165' ,
                    'id_feature' => '4109',
                ],
                [
                    'id_item' => '165' ,
                    'id_feature' => '2429',
                ],
                /* BIO7505 */
                [
                    'id_item' => '166' ,
                    'id_feature' => '1280',
                ],
                [
                    'id_item' => '166' ,
                    'id_feature' => '4110',
                ],
                [
                    'id_item' => '166' ,
                    'id_feature' => '2429',
                ],
                /* BIO310TDF */
                [
                    'id_item' => '167' ,
                    'id_feature' => '1060',
                ],
                /* BIO510TDF */
                [
                    'id_item' => '168' ,
                    'id_feature' => '1060',
                ],
                /* BIO630TDF */
                [
                    'id_item' => '169' ,
                    'id_feature' => '1306',
                ],
                /* NOTE Motobombas */
                /* WX10 */
                [
                    'id_item' => '121' ,
                    'id_feature' => '61',
                ],
                [
                    'id_item' => '121' ,
                    'id_feature' => '4088',
                ],
                [
                    'id_item' => '121' ,
                    'id_feature' => '1361',
                ],
                /* WX15 */
                [
                    'id_item' => '122' ,
                    'id_feature' => '90',
                ],
                [
                    'id_item' => '122' ,
                    'id_feature' => '4092',
                ],
                [
                    'id_item' => '122' ,
                    'id_feature' => '1601',
                ],
                /* WB20XT */
                [
                    'id_item' => '123' ,
                    'id_feature' => '210',
                ],
                [
                    'id_item' => '123' ,
                    'id_feature' => '4111',
                ],
                [
                    'id_item' => '123' ,
                    'id_feature' => '1859',
                ],
                /* WB30XT */
                [
                    'id_item' => '124' ,
                    'id_feature' => '270',
                ],
                [
                    'id_item' => '124' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '124' ,
                    'id_feature' => '1904',
                ],
                /* WT20X */
                [
                    'id_item' => '125' ,
                    'id_feature' => '470',
                ],
                [
                    'id_item' => '125' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '125' ,
                    'id_feature' => '1904',
                ],
                /* WT30X */
                [
                    'id_item' => '126' ,
                    'id_feature' => '610',
                ],
                [
                    'id_item' => '126' ,
                    'id_feature' => '4112',
                ],
                [
                    'id_item' => '126' ,
                    'id_feature' => '2011',
                ],
                /* WT40X */
                [
                    'id_item' => '127' ,
                    'id_feature' => '716',
                ],
                [
                    'id_item' => '127' ,
                    'id_feature' => '4098',
                ],
                [
                    'id_item' => '127' ,
                    'id_feature' => '2130',
                ],
                /* WH5 */
                [
                    'id_item' => '128' ,
                    'id_feature' => '55',
                ],
                [
                    'id_item' => '128' ,
                    'id_feature' => '4088',
                ],
                [
                    'id_item' => '128' ,
                    'id_feature' => '1361',
                ],
                /* WH10X */
                [
                    'id_item' => '129' ,
                    'id_feature' => '108',
                ],
                [
                    'id_item' => '129' ,
                    'id_feature' => '4092',
                ],
                [
                    'id_item' => '129' ,
                    'id_feature' => '1601',
                ],
                /* WH20X */
                [
                    'id_item' => '130' ,
                    'id_feature' => '235',
                ],
                [
                    'id_item' => '130' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '130' ,
                    'id_feature' => '1904',
                ],
                /* WH75 */
                [
                    'id_item' => '131' ,
                    'id_feature' => '270',
                ],
                [
                    'id_item' => '131' ,
                    'id_feature' => '4094',
                ],
                [
                    'id_item' => '131' ,
                    'id_feature' => '1904',
                ],
                /* WH90X */
                [
                    'id_item' => '132' ,
                    'id_feature' => '270',
                ],
                [
                    'id_item' => '132' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '132' ,
                    'id_feature' => '1904',
                ],
                /* WH100X */
                [
                    'id_item' => '133' ,
                    'id_feature' => '510',
                ],
                [
                    'id_item' => '133' ,
                    'id_feature' => '4105',
                ],
                [
                    'id_item' => '133' ,
                    'id_feature' => '2011',
                ],
                /* WMP20X */
                [
                    'id_item' => '134' ,
                    'id_feature' => '256',
                ],
                [
                    'id_item' => '134' ,
                    'id_feature' => '4093',
                ],
                [
                    'id_item' => '134' ,
                    'id_feature' => '1904',
                ],
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

            /* Cecotec */
            DB::table('item_feature')->insert([
                /* NOTE CONGAEXCELLENCE */
                // Peso
                // [
                //     'id_item' => '237',
                //     'id_feature' => '45'
                // ],
                /* NOTE CONGAEXCELLENCE990 */
                // Peso
                [
                    'id_item' => '238',
                    'id_feature' => '45'
                ]
            ]);
        } else { echo "\e[31mTable item_feature is not empty, therefore NOT "; }
    }
}
