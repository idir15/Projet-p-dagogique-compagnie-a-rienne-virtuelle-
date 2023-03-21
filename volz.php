<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VolsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // for ($i=1; $i < 5; $i++) { 
    //   DB::table('Vols')->insert([
    //         'num_vol' =>'FA001',
    //         'date_depart' => '2020-12-15',
    //        'heure_depart'=> '22:00:00',
    //         'date_arriver' => '2020-12-16',
    //       'heure_arriver'=>  '01:00:00',
    //         'duree_vol' => '03:00',
    //         'num_ville_depart'=>51,
    //         'num_ville_arriver'=>1,
    //          'ville_depart'=> 'Alger', 
    //          'ville_arriver' => 'Paris',

    //         'nombre_place_restante' => 50,

    //         'prix_vol' => '30000',
    //         "id_avion" => 1,
    //         "code_aeroport_depart" => "ALG",
    //         "nom_aeroport_depart"=>"HOUARI BOUMEDIENE",
    //         "code_aeroport_arriver" => "CDG",
    //         "nom_aeroport_arriver"=>"AÉROPORT DE PARIS-CHARLES-DE-GAULLE",

    //         // "created_at" => Carbon::now(),
    //         // "updated_at" => Carbon::now(),
    //         "num_terminal_depart"=>2,
    //         "num_terminal_arriver"=>3,
    //         "heure_embarquement"=>'07:30:00',
    //         "porte_embarquement"=>"p0",
    //         "prix_bagage_sup"=>200,



    //      ]);   
    // //     }
    // for ($i=2; $i <= 3; $i++) { 
    //     DB::table('Vols')->insert([
    //         'num_vol' =>'FA'.$i.$i.$i,
    //         'date_depart' => '2020-11-30',
    //        'heure_depart'=> '08:00:00',
    //         'date_arriver' => '2020-11-30',
    //       'heure_arriver'=>  '10:00:00',
    //         'duree_vol' => '02:00',
    //         'ville_depart'=> 'Paris', 
    //          'ville_arriver' => 'Alger',
    //         'num_ville_depart'=>1,
    //         'num_ville_arriver'=>51,
    //         'nombre_place_restante' => 50,
    //         'prix_vol' => '30000',
    //         "id_avion" =>$i,
    //         "code_aeroport_depart" => "CDG",
    //         "nom_aeroport_depart"=>"AÉROPORT DE PARIS-CHARLES-DE-GAULLE",
    //         "code_aeroport_arriver" => "ALG",
    //         "nom_aeroport_arriver"=>"HOUARI BOUMEDIENE",
    //         "num_terminal_depart"=>2,
    //         "num_terminal_arriver"=>3,
    //         "heure_embarquement"=>'07:30:00',
    //         "porte_embarquement"=>"p".$i,
    //         "prix_bagage_sup"=>200,                
    //         // "created_at" => Carbon::now(),
    //         // "updated_at" => Carbon::now(),



    //         ]);   
    //     }
    //seeder les vols Assia Europe *********************************
    //Alger -Paris:
    //CDG aller 1
    for ($month = 1; $month < 7; $month++) 
    {
      for ($day = 1; $day < 32; $day++)
       {

        if (($day == 28 & $month == 2) | ($month % 2 == 0 & $day == 30) | $day == 31) 
        {
          $next_day = 1;
          $next_month = $month + 1;
        } else 
        {
          $next_day = $day + 1;
          $next_month = $month;
        }

        if (($month == 1 & $day > 14) | ($month == 2 & $day < 29) | ($month > 2 & $month < 6 & $day < 31) | ($month != 2 & $day == 31 & $month % 2 != 0) | ($month == 6 & $day < 16))
         {
          DB::table('Vols')->insert([
            'num_vol' => 'FA001',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 1,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '11:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA002',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '19:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 1,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '16:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG   Aller 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA003',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 2,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA004',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 2,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);

          //aller3 

          DB::table('Vols')->insert([
            'num_vol' => 'FA005',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 3,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA006',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,

            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 3,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //aller4

          DB::table('Vols')->insert([
            'num_vol' => 'FA007',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '08:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 4,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 4
          DB::table('Vols')->insert([
            'num_vol' => 'FA008',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:40:00',
            'duree_vol' => '02:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Paris',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 4,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:40:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);

          //aller5

          DB::table('Vols')->insert([
            'num_vol' => 'FA009',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '23:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '01:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 5,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '22:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 5
          DB::table('Vols')->insert([
            'num_vol' => 'FA010',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '04:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '06:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 5,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //fin Gdggggggggggggggggggggggggg 010

          //Orlyyy 2h:30 avion 6-7-8-9 p4 p5 

          DB::table('Vols')->insert([
            'num_vol' => 'FA011',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 6,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '08:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //orly retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA012',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:50:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 6,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly ",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //orly  Aller 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA013',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:10:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 7,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:40:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA014',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 7,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:40:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);

          //aller3 

          DB::table('Vols')->insert([
            'num_vol' => 'FA015',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 8,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA016',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '03:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 8,

            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '00:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //aller4

          DB::table('Vols')->insert([
            'num_vol' => 'FA017',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:30:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 9,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '22:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 4
          DB::table('Vols')->insert([
            'num_vol' => 'FA018',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '01:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '04:00:00',
            'duree_vol' => '02:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Paris',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 9,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '01:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //paris lYON  2 VOL CHAQUE JOUR P5 P6 AVIONS 10**FA019***1h 50****************************************************
          //aLLER 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA019',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:50:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Lyon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 2,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 10,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LYS",
            "nom_aeroport_arriver" => "Aéroport de Lyon-Saint-Exupéry ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA020',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:50:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Lyon',
            'num_ville_depart' => 2,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 10,
            "code_aeroport_depart" => "LYS",
            "nom_aeroport_depart" => "Aéroport de Lyon-Saint-Exupéry ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p6",
            "prix_bagage_sup" => 1000,
          ]);

          //aLLER 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA021',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Lyon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 2,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 11,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LYS",
            "nom_aeroport_arriver" => "Aéroport de Lyon-Saint-Exupéry ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA022',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '02:10:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Lyon',
            'num_ville_depart' => 2,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 11,
            "code_aeroport_depart" => "LYS",
            "nom_aeroport_depart" => "Aéroport de Lyon-Saint-Exupéry ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '23:50:00',
            "porte_embarquement" => "p6",
            "prix_bagage_sup" => 1000,
          ]);

          //Paris marseille avion 12 FA023 **********1h30******p7 p8****** 12 AVIONS  Aéroport de Marseille Provence MRS 14320dz
          //aLLER 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA023',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '09:30:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 12,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA024',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:00:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 12,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller 2 fa025
          DB::table('Vols')->insert([
            'num_vol' => 'FA025',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:50:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 13,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA026',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '21:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '23:00:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 13,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller 3 fa027
          DB::table('Vols')->insert([
            'num_vol' => 'FA027',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:00:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 14,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '20:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA028',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '03:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '04:30:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 14,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '03:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //Toulouseeee   ****fa029 *****avion 15 ****prix = 15400 dz p9 p10****1h 40

          DB::table('Vols')->insert([
            'num_vol' => 'FA029',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:10:00',
            'duree_vol' => '01:40:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Toulouse',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 4,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '15400',
            "id_avion" => 15,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "TLS",
            "nom_aeroport_arriver" => "Aéroport de Toulouse-Blagnac",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:00:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA030',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:40:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Toulouse',
            'num_ville_depart' => 4,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '15400',
            "id_avion" => 15,
            "code_aeroport_depart" => "TLS",
            "nom_aeroport_depart" => "Aéroport de Toulouse-Blagnac ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:40:00',
            "porte_embarquement" => "p10",
            "prix_bagage_sup" => 1000,
          ]);

          //Nice fa031 *****avion 16  prix  17400 Aéroport de Nice-Côte d'Azur NCE fa031***1h 40 p1 p2
          DB::table('Vols')->insert([
            'num_vol' => 'FA031',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:10:00',
            'duree_vol' => '01:40:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Nice',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 4,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17400',
            "id_avion" => 16,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "NCE",
            "nom_aeroport_arriver" => "Aéroport de Nice-Côte d'Azur NCE",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA032',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:50:00',
            'duree_vol' => '01:40:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Nice',
            'num_ville_depart' => 4,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17400',
            "id_avion" => 15,
            "code_aeroport_depart" => "NCE",
            "nom_aeroport_depart" => "Aéroport de Nice-Côte d'Azur",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '16:40:00',
            "porte_embarquement" => "p2",
            "prix_bagage_sup" => 1000,
          ]);

          // Bordeaux ******p2 p3 avion 16 fa033 prix 17000 Aéroport de Bordeaux-Mérignac BOD 1h50

          DB::table('Vols')->insert([
            'num_vol' => 'FA033',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:50:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Bordeaux',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 6,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17000',
            "id_avion" => 16,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BOD",
            "nom_aeroport_arriver" => "Aéroport de Bordeaux-Mérignac",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA034',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:50:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:40:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Bordeaux',
            'num_ville_depart' => 6,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17000',
            "id_avion" => 16,
            "code_aeroport_depart" => "BOD",
            "nom_aeroport_depart" => "Aéroport de Bordeaux-Mérignac",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '20:20:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          //  //Allemagne
          //Francfort: Aéroport de Francfort-sur-le-Main FRA avion 17 prix 21500 fa035 3h:00 


          DB::table('Vols')->insert([
            'num_vol' => 'FA035',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:30:00',
            'duree_vol' => '03:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Francfort',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 7,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 17,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FRA",
            "nom_aeroport_arriver" => "Aéroport de Francfort-sur-le-Main",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA036',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:30:00',
            'duree_vol' => '03:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Francfort',
            'num_ville_depart' => 7,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 17,
            "code_aeroport_depart" => "FRA",
            "nom_aeroport_depart" => "Aéroport de Francfort-sur-le-Main",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:00:00',
            "porte_embarquement" => "p2",
            "prix_bagage_sup" => 1000,
          ]);
          //aller 2 avion18
          DB::table('Vols')->insert([
            'num_vol' => 'FA037',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '18:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '03:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Francfort',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 7,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 18,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FRA",
            "nom_aeroport_arriver" => "Aéroport de Francfort-sur-le-Main",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA038',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '03:00:00',
            'duree_vol' => '03:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Francfort',
            'num_ville_depart' => 7,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 18,
            "code_aeroport_depart" => "FRA",
            "nom_aeroport_depart" => "Aéroport de Francfort-sur-le-Main",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '23:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //////////////////////////////////////////////////////////////////////////////////
          // Berlin 
          //Aéroport de Berlin-Schönefeld SXF prix 33000  duree   avion 19 p1 p5  fa039 3vols p7 p9 5h 20mnt
          //aller1
          DB::table('Vols')->insert([
            'num_vol' => 'FA039',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:20:00',
            'duree_vol' => '05:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 19,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '05:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA040',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:40:00',
            'duree_vol' => '05:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 19,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //aller2
          DB::table('Vols')->insert([
            'num_vol' => 'FA041',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:00:00',
            'duree_vol' => '06:15:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 20,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '10:15:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA042',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '02:15:00',
            'duree_vol' => '06:15:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 20,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //******
          //aller3 
          DB::table('Vols')->insert([
            'num_vol' => 'FA043',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:05:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '22:25:00',
            'duree_vol' => '07:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 21,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 3 *7 h 20  avec escale franchaaa 
          DB::table('Vols')->insert([
            'num_vol' => 'FA044',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '07:40:00',
            'duree_vol' => '07:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 21,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '22:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);

          /////ITALI:**************speranzaaa 
          //ROME:Aéroport Léonard-de-Vinci FCO prix24500  avion 22  fa045 2 fois par jour aller1  2:00
          DB::table('Vols')->insert([
            'num_vol' => 'FA045',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '09:00:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Rome',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 9,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 22,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FCO",
            "nom_aeroport_arriver" => "Aéroport Léonard-de-Vinci",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA046',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '13:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Rome',
            'num_ville_depart' => 9,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 22,
            "code_aeroport_depart" => "FCO",
            "nom_aeroport_depart" => "Aéroport Léonard-de-Vinci",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);

          // aller retur 2 fa047

          DB::table('Vols')->insert([
            'num_vol' => 'FA047',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '14:45:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Rome',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 9,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 23,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FCO",
            "nom_aeroport_arriver" => "Aéroport Léonard-de-Vinci",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:15:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA048',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Rome',
            'num_ville_depart' => 9,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 23,
            "code_aeroport_depart" => "FCO",
            "nom_aeroport_depart" => "Aéroport Léonard-de-Vinci",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // Milaaaaann fa048 avion 24 aerop   prix 24800 1 vol  2h :00 direct 

          // aller retur 2 fa049

          DB::table('Vols')->insert([
            'num_vol' => 'FA049',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '08:00:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Milan',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 10,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24800',
            "id_avion" => 24,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MXP",
            "nom_aeroport_arriver" => "Aéroport de Milan Malpensa",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '05:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA050',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Milan',
            'num_ville_depart' => 10,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24800',
            "id_avion" => 24,
            "code_aeroport_depart" => "MXP",
            "nom_aeroport_depart" => "Aéroport de Milan Malpensa",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          // Venise fa051 avion 25 prix  21000 aropAéroport de Venise-Marco-Polo VCE 11 2 vols  avec escallees
          //aller retour 1 
          DB::table('Vols')->insert([
            'num_vol' => 'FA051',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '11:50:00',
            'duree_vol' => '05:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Venise',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 11,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 25,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "VCE",
            "nom_aeroport_arriver" => "Aéroport de Venise-Marco-Polo",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '05:50:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA052',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '19:50:00',
            'duree_vol' => '05:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Venise',
            'num_ville_depart' => 11,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 25,
            "code_aeroport_depart" => "VCE",
            "nom_aeroport_depart" => "Aéroport de Venise-Marco-Polo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA053',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:15:00',
            'duree_vol' => '06:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Venise',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 11,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 26,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "VCE",
            "nom_aeroport_arriver" => "Aéroport de Venise-Marco-Polo",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:15:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA054',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '01:30:00',
            'duree_vol' => '06:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Venise',
            'num_ville_depart' => 11,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 26,
            "code_aeroport_depart" => "VCE",
            "nom_aeroport_depart" => "Aéroport de Venise-Marco-Polo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '18:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //Espagne Madrid avion27  fa055  prix19800  aerop Aéroport Adolfo Suárez Madrid-Barajas MAD 12 2 vols  vols direct 1h 45minutes
          //aller retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA055',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '08:45:00',
            'duree_vol' => '01:45:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Madrid',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 12,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAD",
            "nom_aeroport_arriver" => " Aéroport Adolfo Suárez Madrid-Barajas",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA056',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:45:00',
            'duree_vol' => '01:45:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Madrid',
            'num_ville_depart' => 12,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "MAD
  ",
            "nom_aeroport_depart" => "Aéroport Adolfo Suárez Madrid-Barajas",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          //aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA057',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '12:45:00',
            'duree_vol' => '01:45:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Madrid',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 12,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAD",
            "nom_aeroport_arriver" => " Aéroport Adolfo Suárez Madrid-Barajas",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA058',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:45:00',
            'duree_vol' => '01:45:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Madrid',
            'num_ville_depart' => 12,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "MAD
  ",
            "nom_aeroport_depart" => "Aéroport Adolfo Suárez Madrid-Barajas",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '16:15:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          // Barcelon Aéroport Josep Tarradellas Barcelone-El Prat  BCN 13  prix 19000   fa059  avion 28 2 vols   1h 20minutes direct 

          //aller retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA059',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '09:20:00',
            'duree_vol' => '01:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Barcelon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 13,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 28,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BCN",
            "nom_aeroport_arriver" => "Aéroport Josep Tarradellas Barcelone-El Prat",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          DB::table('Vols')->insert([
            'num_vol' => 'FA060',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:50:00',
            'duree_vol' => '01:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Barcelon',
            'num_ville_depart' => 13,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 28,
            "code_aeroport_depart" => "BCN",
            "nom_aeroport_depart" => "Aéroport Josep Tarradellas Barcelone-El Prat",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);

          ///aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA061',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '13:00:00',
            'duree_vol' => '01:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Barcelon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 13,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 29,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BCN",
            "nom_aeroport_arriver" => "Aéroport Josep Tarradellas Barcelone-El Prat",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '11:10:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA062',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:20:00',
            'duree_vol' => '01:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Barcelon',
            'num_ville_depart' => 13,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 29,
            "code_aeroport_depart" => "BCN",
            "nom_aeroport_depart" => "Aéroport Josep Tarradellas Barcelone-El Prat",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //------------
          //Russie 
          //Moscou: aerop  Aéroport de Moscou-Domodédovo DME 14  fa063 avion30  prix 26300 1 vol directttt

          ///aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA063',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '16:10:00',
            'duree_vol' => '07:10:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Moscou',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 14,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '26300',
            "id_avion" => 30,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "DME",
            "nom_aeroport_arriver" => "Aéroport de Moscou-Domodédovo",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '08:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA064',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '00:30:00',
            'duree_vol' => '07:10:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Moscou',
            'num_ville_depart' => 14,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '26300',
            "id_avion" => 30,
            "code_aeroport_depart" => "DME",
            "nom_aeroport_depart" => "Aéroport de Moscou-Domodédovo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '23:10:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);

          //------------
          //Royaume-Uni
          //	Londres  Aéroport de Londres Heathrow LHR  15 fa065  av 31 prix  19500 1  vol 3h 10 sans escale 

          DB::table('Vols')->insert([
            'num_vol' => 'FA065',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '10:10:00',
            'duree_vol' => '03:10:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Londres',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 15,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19500',
            "id_avion" => 1,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LHR",
            "nom_aeroport_arriver" => "Aéroport de Londres Heathrow",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA066',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '03:10:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Londres',
            'num_ville_depart' => 15,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19500',
            "id_avion" => 1,
            "code_aeroport_depart" => "LHR",
            "nom_aeroport_depart" => "Aéroport de Londres Heathrow",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //Manchester Aéroport de Manchester MAN 16 AV 1 fa067 prix 20800
          DB::table('Vols')->insert([
            'num_vol' => 'FA067',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '14:00:00',
            'duree_vol' => '05:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Manchester',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 16,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20800',
            "id_avion" => 1,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAN",
            "nom_aeroport_arriver" => "Aéroport de Manchester",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '08:10:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA068',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '05:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Manchester',
            'num_ville_depart' => 16,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20800',
            "id_avion" => 1,
            "code_aeroport_depart" => "MAN",
            "nom_aeroport_depart" => "Aéroport de Manchester",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //------------------
          //SUISSE
          //Genève aerop Aéroport international de Genève GVA 17     prix 20000   fa069    av 2 1vol 2h:00

          DB::table('Vols')->insert([
            'num_vol' => 'FA069',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:30:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Genève',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 17,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20000',
            "id_avion" => 2,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "GVA",
            "nom_aeroport_arriver" => "Aéroport international de Genève",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA070',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => ' Genève',
            'num_ville_depart' => 17,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20000',
            "id_avion" => 2,
            "code_aeroport_depart" => "GVA",
            "nom_aeroport_depart" => "Aéroport international de Genève",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '19:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
 //------
        //grèce
        //Athènes aerop Aéroport international d'Athènes Elefthérios-Venizélos ATH 18      avion3    prix  21000     1 vol   FA071

        DB::table('Vols')->insert([
          'num_vol' => 'FA071',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '07:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '14:50:00',
          'duree_vol' => '06:50:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Athènes ',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 18,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '21000',
          "id_avion" => 3,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "ATH",
          "nom_aeroport_arriver" => "Aéroport international d'Athènes Elefthérios-Venizélos ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '06:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA072',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '16:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '20:50:00',
          'duree_vol' => '06:50:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Athènes ',
          'num_ville_depart' => 18,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '21000',
          "id_avion" => 3,
          "code_aeroport_depart" => "ATH",
          "nom_aeroport_depart" => "Aéroport international d'Athènes Elefthérios-Venizélos",

          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '15:30:00',
          "porte_embarquement" => "p12",
          "prix_bagage_sup" => 1000,
        ]);

       //------------
        
//----------
        // Portugal
        //Lisbonne    aerop "Aéroport Humberto Delgado de Lisbonne" LIS20   av6   prix  13000  fa077    2 vol
      
         //alller retour 1
       DB::table('Vols')->insert([
        'num_vol' => 'FA077',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '15:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '16:35:00',
        'duree_vol' => '02:05:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Lisbonne',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 20,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "LIS",
        "nom_aeroport_arriver" => "Aéroport Humberto Delgado de Lisbonne ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '15:00:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA078',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '18:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '20:35:00',
        'duree_vol' => '02:05:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Lisbonne',
        'num_ville_depart' => 20,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "LIS",
        "nom_aeroport_depart" => "Aéroport Humberto Delgado de Lisbonne",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '18:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);
      //aller retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA079',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '09:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '11:35:00',
        'duree_vol' => '02:05:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Lisbonne',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 20,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "LIS",
        "nom_aeroport_arriver" => "Aéroport Humberto Delgado de Lisbonne ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '09:00:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA080',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '13:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '16:35:00',
        'duree_vol' => '02:05:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Lisbonne',
        'num_ville_depart' => 20,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "LIS",
        "nom_aeroport_depart" => "Aéroport Humberto Delgado de Lisbonne",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '13:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);
//  //--------
        //Pays-Bas
        //	Amsterdam   Aéroport d'Amsterdam-Schiphol  AMS 21  PRIX18000     FA081   vol1  avion 7 avec l escale  5h 00

         //aller retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA081',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '06:00:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '11:00:00',
        'duree_vol' => '05:00:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Amsterdam ',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 21,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '18000',
        "id_avion" => 7,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "AMS",
        "nom_aeroport_arriver" => "Aéroport d'Amsterdam-Schiphol ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '05:30:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA082',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '13:00:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '18:00:00',
        'duree_vol' => '05:00:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Amsterdam',
        'num_ville_depart' => 21,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '18000',
        "id_avion" => 7,
        "code_aeroport_depart" => "AMS",
        "nom_aeroport_depart" => "Aéroport d'Amsterdam-Schiphol",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '14:30:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);

  //------------
        // Belgique  Bruxelles,    FA083    prix  30000     aerop Aéroport de Bruxelles-National BRU  22 av8   1 vol 3h:00

        DB::table('Vols')->insert([
          'num_vol' => 'FA083',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '18:35:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '21:35:00',
          'duree_vol' => '03:00:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Bruxelles',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 22,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '30000',
          "id_avion" => 8,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "BRU",
          "nom_aeroport_arriver" => "Aéroport de Bruxelles-National ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '18:00:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA084',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '23:00:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '02:00:00',
          'duree_vol' => '03:00:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Bruxelles',
          'num_ville_depart' => 22,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '30000',
          "id_avion" => 8,
          "code_aeroport_depart" => "BRU",
          "nom_aeroport_depart" => " Aéroport de Bruxelles-National",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
  //--
        //Autriche Vienne    aero Aéroport de Vienne-Schwechat VIE 23  av9    FA085    prix 31000   vol1  avec escalllless
        DB::table('Vols')->insert([
          'num_vol' => 'FA085',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '10:45:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '17:40:00',
          'duree_vol' => '06:55:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Vienne',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 23,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '31000',
          "id_avion" => 9,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "VIE",
          "nom_aeroport_arriver" => "Aéroport de Vienne-Schwechat  ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '10:15:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA086',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '19:45:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '02:40:00',
          'duree_vol' => '06:55:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Vienne',
          'num_ville_depart' => 23,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '31000',
          "id_avion" => 9,
          "code_aeroport_depart" => "VIE",
          "nom_aeroport_depart" => "Aéroport de Vienne-Schwechat ",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '19:15:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
//

//-------
        // Hongrie Budapest   aerop Aéroport international de Budapest-Ferenc Liszt BUD  24 prix  av10    FA087   PRIX  37000  1VOL    avec escale 

        DB::table('Vols')->insert([
          'num_vol' => 'FA087',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '06:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '15:30:00',
          'duree_vol' => '09:30:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Budapest',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 24,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '37000',
          "id_avion" =>10,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "BUD",
          "nom_aeroport_arriver" => "Aéroport international de Budapest-Ferenc Liszt",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '05:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA088',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '17:00:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '02:30:00',
          'duree_vol' => '09:30:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Budapest',
          'num_ville_depart' => 24,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '37000',
          "id_avion" => 10,
          "code_aeroport_depart" => "BUD",
          "nom_aeroport_depart" => "Aéroport international de Budapest-Ferenc Liszt",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '18:30:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
  //--------
        //Danemark 	Copenhague   Aéroport de Copenhague CPH 25 av 11 FA089 PRIX 23000 1 VOL avec escallleeee onblig

        DB::table('Vols')->insert([
          'num_vol' => 'FA089',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '12:10:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '19:35:00',
          'duree_vol' => '07:25:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Copenhague',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 25,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '23000',
          "id_avion" =>11,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "CPH",
          "nom_aeroport_arriver" => "Aéroport de Copenhague",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '11:40:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA090',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '20:10:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '05:35:00',
          'duree_vol' => '07:25:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Copenhague',
          'num_ville_depart' => 25,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '23000',
          "id_avion" => 11,
          "code_aeroport_depart" => "CPH",
          "nom_aeroport_depart" => "Aéroport de Copenhague",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '19:40:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
          ]);
//Turquie
        //	Istanbul   av  4   fa073      Aéroport Atatürk d'Istanbul  ISL19  prix 38800  2 vols 03h15m
         
        DB::table('Vols')->insert([
          'num_vol' => 'FA073',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '08:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '11:15:00',
          'duree_vol' => '03:15:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Istanbul',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 19,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '38800',
          "id_avion" => 4,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "ISL",
          "nom_aeroport_arriver" => "Aéroport Atatürk d'Istanbul ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '07:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 1
        DB::table('Vols')->insert([
          'num_vol' => 'FA074',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '13:15:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '16:30:00',
          'duree_vol' => '03:15:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Istanbul',
          'num_ville_depart' => 19,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '38800',
          "id_avion" => 4,
          "code_aeroport_depart" => "ISL",
          "nom_aeroport_depart" => "Aéroport Atatürk d'Istanbul ",

          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '14:45:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);

       //alller retour 2 
       DB::table('Vols')->insert([
        'num_vol' => 'FA075',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '12:15:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '15:30:00',
        'duree_vol' => '03:15:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Istanbul',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 19,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '38800',
        "id_avion" => 5,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "ISL",
        "nom_aeroport_arriver" => "Aéroport Atatürk d'Istanbul ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '11:45:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA076',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '17:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '20:45:00',
        'duree_vol' => '03:15:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Istanbul',
        'num_ville_depart' => 19,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '38800',
        "id_avion" => 5,
        "code_aeroport_depart" => "ISL",
        "nom_aeroport_depart" => "Aéroport Atatürk d'Istanbul ",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '17:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
        ]);  
//tunisie chaque jourr 

 //Tunisie 
                      //2 vols chaque jours FA784 id avion 67 68 prix :  14000 Aéroport international de Tunis-Carthage TUN 
                    //aller1
                    DB::table('Vols')->insert([
                  
                      'num_vol' =>'FA784', 
                      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                      'heure_depart'=> '07:00', 
                      'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                      'heure_arriver'=>  '08:20', 
                      'duree_vol' => '01:20',
                       
                       'num_ville_depart'=>51,
                       'num_ville_arriver'=>41, 
                       'ville_depart'=> 'Alger',  
                       'ville_arriver' => 'Tunis', 
                        
                       
                       'prix_vol' => '14000',
                        "id_avion" => 67, 
                        "code_aeroport_depart" => "ALG",
                           "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                    
                         "code_aeroport_arriver" => "TUN",
                          "nom_aeroport_arriver"=>" Aéroport international de Tunis-Carthage", 
                          
                      
                       "num_terminal_depart"=>2, 
                       "num_terminal_arriver"=>3, 
                       "heure_embarquement"=>'06:30',  
                       "porte_embarquement"=>"p1", 
                       "prix_bagage_sup"=>1000,
                       
                        // "created_at" => Carbon::now(),
                       // "updated_at" => Carbon::now(),
                       
                    ]);   
                    
                    
                    DB::table('Vols')->insert([
                      
                      'num_vol' =>'FA785', 
                      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                      'heure_depart'=> '14:20', 
                      'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                      'heure_arriver'=>  '15:40', 
                      'duree_vol' => '01:20',
                       
                       'num_ville_depart'=>41,
                       'num_ville_arriver'=>51, 
                       'ville_depart'=> 'Tunis',  
                       'ville_arriver' => 'Alger', 
                        
                         'prix_vol' => '14000',
                       
                        "id_avion" => 67, 
                         "code_aeroport_depart" => "TUN",
                          "nom_aeroport_depart"=>" Aéroport international de Tunis-Carthage", 
                          "code_aeroport_arriver" => "ALG",
                           "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",
                    
                      
                       "num_terminal_depart"=>3, 
                       "num_terminal_arriver"=>1, 
                       "heure_embarquement"=>'13:50',  
                       "porte_embarquement"=>"p1", 
                       "prix_bagage_sup"=>1000,
                       
                        // "created_at" => Carbon::now(),
                       // "updated_at" => Carbon::now(),
                       
                    ]);
              
//aller2

DB::table('Vols')->insert([
                
'num_vol' =>'FA786', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '11:10', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '12:30', 
'duree_vol' => '01:20',
 
 'num_ville_depart'=>51,
 'num_ville_arriver'=>41, 
 'ville_depart'=> 'Alger',  
 'ville_arriver' => 'Tunis', 
  
 
 'prix_vol' => '14000',
  "id_avion" => 68, 
  "code_aeroport_depart" => "ALG",
     "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

   "code_aeroport_arriver" => "TUN",
    "nom_aeroport_arriver"=>" Aéroport international de Tunis-Carthage", 
    

 "num_terminal_depart"=>2, 
 "num_terminal_arriver"=>3, 
 "heure_embarquement"=>'10:40',  
 "porte_embarquement"=>"p1", 
 "prix_bagage_sup"=>1000,
 
  // "created_at" => Carbon::now(),
 // "updated_at" => Carbon::now(),
 
]);   


DB::table('Vols')->insert([

'num_vol' =>'FA787', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '12:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '13:20', 
'duree_vol' => '01:20',
 
 'num_ville_depart'=>41,
 'num_ville_arriver'=>51, 
 'ville_depart'=> 'Tunis',  
 'ville_arriver' => 'Alger', 
  
   'prix_vol' => '14000',
 
  "id_avion" => 68, 
   "code_aeroport_depart" => "TUN",
    "nom_aeroport_depart"=>" Aéroport international de Tunis-Carthage", 
    "code_aeroport_arriver" => "ALG",
     "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


 "num_terminal_depart"=>3, 
 "num_terminal_arriver"=>1, 
 "heure_embarquement"=>'11:30',  
 "porte_embarquement"=>"p1", 
 "prix_bagage_sup"=>1000,
 
  // "created_at" => Carbon::now(),
 // "updated_at" => Carbon::now(),
 
]);






     
        //LYNDA HADJ ALI 
// Nationaalllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll

        DB::table('Vols')->insert(['num_vol' =>'FA700', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '08:30:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '09:00:00', 'duree_vol' => '00:30',
                
        'num_ville_depart'=>51,'num_ville_arriver'=>52, 'ville_depart'=> 'Alger',  'ville_arriver' => 'Béjaïa',
        
        'prix_vol' => '2320', "id_avion" => 31,  "code_aeroport_depart" => "ALG","nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",  "code_aeroport_arriver" => "BJA",
        "nom_aeroport_arriver"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane",

       
        "num_terminal_depart"=>2, "num_terminal_arriver"=>2, "heure_embarquement"=>'08:00:00',  "porte_embarquement"=>"p0", "prix_bagage_sup"=>200,
        
         // "created_at" => Carbon::now(),
        // "updated_at" => Carbon::now(),
        
     ]);   
//     }
DB::table('Vols')->insert(['num_vol' =>'FA701', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '16:50:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '17:20:00', 'duree_vol' => '00:30',
        
'num_ville_depart'=>52,'num_ville_arriver'=>51, 'ville_depart'=> 'Béjaïa',  'ville_arriver' => 'Alger',  

'prix_vol' => '2320', "id_avion" => 31,  "code_aeroport_depart" => "BJA","code_aeroport_arriver" => "ALG","nom_aeroport_depart"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane","nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, "num_terminal_arriver"=>2, "heure_embarquement"=>'16:20:00',  "porte_embarquement"=>"p0", "prix_bagage_sup"=>200,
]); 
// vol 2 Bejaia 
DB::table('Vols')->insert([

       'num_vol' =>'FA702', 
       'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
       'heure_depart'=> '13:50:00', 
       'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
       'heure_arriver'=>  '14:20:00', 
       'duree_vol' => '00:30',
        
        'num_ville_depart'=>51,
        'num_ville_arriver'=>52, 
        'ville_depart'=> 'Alger',  
        'ville_arriver' => 'Béjaia', 
         
        
        'prix_vol' => '2320',
         "id_avion" => 32, 
          "code_aeroport_depart" => "ALG",
           "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
           "code_aeroport_arriver" => "BJA",
            "nom_aeroport_arriver"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane",

       
        "num_terminal_depart"=>3, 
        "num_terminal_arriver"=>3, 
        "heure_embarquement"=>'13:20:00',  
        "porte_embarquement"=>"p1", 
        "prix_bagage_sup"=>200,
        
         // "created_at" => Carbon::now(),
        // "updated_at" => Carbon::now(),
        
     ]);   
//     }
DB::table('Vols')->insert(['num_vol' =>'FA703', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '15:25:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '16:55:00', 'duree_vol' => '00:30',
        
'num_ville_depart'=>52,'num_ville_arriver'=>51, 'ville_depart'=> 'Béjaia',  'ville_arriver' => 'Alger',  

'prix_vol' => '2320', "id_avion" => 32,  "code_aeroport_depart" => "BJA","code_aeroport_arriver" => "ALG","nom_aeroport_depart"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane","nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, "num_terminal_arriver"=>3, "heure_embarquement"=>'14:55:00',  "porte_embarquement"=>"p1", "prix_bagage_sup"=>200,


]); 




// vol avc djanet 


DB::table('Vols')->insert([

'num_vol' =>'FA704', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:45:00', 
'duree_vol' => '03:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>53, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Djanet', 


'prix_vol' => '11000',
"id_avion" => 33, 
 "code_aeroport_depart" => "ALG",
  "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
  "code_aeroport_arriver" => "DJG",
   "nom_aeroport_arriver"=>"Aéroport de Djanet - Tiska",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   
DB::table('Vols')->insert([

'num_vol' =>'FA705', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '02:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '05:45:00', 
'duree_vol' => '03:30',

'num_ville_depart'=>53,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Djanet',  
'ville_arriver' => 'Alger', 


'prix_vol' => '11000',
"id_avion" => 33, 
 "code_aeroport_depart" => "DJG",
  "nom_aeroport_depart"=>"Aéroport de Djanet - Tiska", 
  "code_aeroport_arriver" => "ALG",
   "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'01:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   
DB::table('Vols')->insert([

'num_vol' =>'FA706', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '23:00:00', 
'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '02:30:00', 
'duree_vol' => '03:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>53, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Djanet', 


'prix_vol' => '11000',
"id_avion" => 34, 
 "code_aeroport_depart" => "ALG",
  "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
  "code_aeroport_arriver" => "DJG",
   "nom_aeroport_arriver"=>"Aéroport de Djanet - Tiska",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'22:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA707', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '04:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '07:45:00', 
'duree_vol' => '03:30',

'num_ville_depart'=>53,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Djanet',  
'ville_arriver' => 'Alger', 


'prix_vol' => '11000',
"id_avion" => 34, 
 "code_aeroport_depart" => "DJG",
  "nom_aeroport_depart"=>"Aéroport de Djanet - Tiska", 
  "code_aeroport_arriver" => "ALG",
   "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'03:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


// illizi 
DB::table('Vols')->insert([

'num_vol' =>'FA708', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:00:00', 
'duree_vol' => '03:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>54, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Illizi', 


'prix_vol' => '12100',
"id_avion" => 35, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "VVZ",
"nom_aeroport_arriver"=>"Aéroport d'Illizi - Takhamalt",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA709', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '14:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:00:00', 
'duree_vol' => '03:00',

'num_ville_depart'=>54,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Illizi',  
'ville_arriver' => 'Alger', 


'prix_vol' => '12100',
"id_avion" => 35, 
"code_aeroport_depart" => "VVZ",
"nom_aeroport_depart"=>"Aéroport d'Illizi - Takhamalt", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'13:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA710', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '13:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:00:00', 
'duree_vol' => '03:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>54, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Illizi', 


'prix_vol' => '12100',
"id_avion" => 36, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "VVZ",
"nom_aeroport_arriver"=>"Aéroport d'Illizi - Takhamalt",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'12:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA711', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '23:00:00', 
'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '02:00:00', 
'duree_vol' => '03:00',

'num_ville_depart'=>54,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Illizi',  
'ville_arriver' => 'Alger', 


'prix_vol' => '12100',
"id_avion" => 36, 
"code_aeroport_depart" => "VVZ",
"nom_aeroport_depart"=>"Aéroport d'Illizi - Takhamalt", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'22:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

// tamenrasset

DB::table('Vols')->insert([

'num_vol' =>'FA712', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '12:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '14:50:00', 
'duree_vol' => '02:25',

'num_ville_depart'=>51,
'num_ville_arriver'=>55, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Tamanrasset', 


'prix_vol' => '15900',
"id_avion" => 37, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "TMR",
"nom_aeroport_arriver"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'11:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 


DB::table('Vols')->insert([

'num_vol' =>'FA713', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '22:00:00', 
'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '00:25:00', 
'duree_vol' => '02:25',

'num_ville_depart'=>55,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Tamanrasset',  
'ville_arriver' => 'Alger', 


'prix_vol' => '15900',
"id_avion" => 37, 
"code_aeroport_depart" => "TMR",
"nom_aeroport_depart"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'21:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA714', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '03:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '05:55:00', 
'duree_vol' => '02:25',

'num_ville_depart'=>51,
'num_ville_arriver'=>55, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Tamanrasset', 


'prix_vol' => '15900',
"id_avion" => 38, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "TMR",
"nom_aeroport_arriver"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'02:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA715', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '09:45:00', 
'duree_vol' => '02:25',

'num_ville_depart'=>55,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Tamanrasset',  
'ville_arriver' => 'Alger', 


'prix_vol' => '15900',
"id_avion" => 38, 
"code_aeroport_depart" => "TMR",
"nom_aeroport_depart"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 

// jijel 

DB::table('Vols')->insert([

'num_vol' =>'FA716', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '07:55:00', 
'duree_vol' => '00:55',

'num_ville_depart'=>51,
'num_ville_arriver'=>56, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Jijel', 


'prix_vol' => '3120',
"id_avion" => 39, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "GJL",
"nom_aeroport_arriver"=>"Aéroport de Jijel - Ferhat Abbas",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA717', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '08:40:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '09:35:00', 
'duree_vol' => '00:55',

'num_ville_depart'=>56,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Jijel',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3120',
"id_avion" => 39, 
"code_aeroport_depart" => "GJL",
"nom_aeroport_depart"=>"Aéroport de Jijel - Ferhat Abbas", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'08:10:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA718', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '15:55:00', 
'duree_vol' => '00:55',

'num_ville_depart'=>51,
'num_ville_arriver'=>56, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Jijel', 


'prix_vol' => '3120',
"id_avion" => 40, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "GJL",
"nom_aeroport_arriver"=>"Aéroport de Jijel - Ferhat Abbas",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'14:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

DB::table('Vols')->insert([

'num_vol' =>'FA719', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '16:40:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '17:20:00', 
'duree_vol' => '00:55',

'num_ville_depart'=>56,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Jijel',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3120',
"id_avion" => 40, 
"code_aeroport_depart" => "GJL",
"nom_aeroport_depart"=>"Aéroport de Jijel - Ferhat Abbas", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'16:10:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   

// annaba


DB::table('Vols')->insert([

'num_vol' =>'FA720', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:30:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>51,
'num_ville_arriver'=>57, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Annaba', 


'prix_vol' => '4880',
"id_avion" => 41, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "AAE",
"nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p4", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA721', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:40:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>57,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Annaba',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4880',
"id_avion" => 41, 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'14:55:00',  
"porte_embarquement"=>"p5", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 



DB::table('Vols')->insert([

'num_vol' =>'FA722', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '18:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '19:15:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>51,
'num_ville_arriver'=>57, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Annaba', 


'prix_vol' => '4880',
"id_avion" => 42, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "AAE",
"nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'17:30:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA723', 
'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '01:50:00', 
'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '02:40:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>57,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Annaba',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4880',
"id_avion" => 42, 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'01:20:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 

// constantine 

DB::table('Vols')->insert([

'num_vol' =>'FA724', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '06:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '07:00:00', 
'duree_vol' => '00:50',

'num_ville_depart'=>51,
'num_ville_arriver'=>58, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Constantine', 


'prix_vol' => '3720',
"id_avion" => 43, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "CZL",
"nom_aeroport_arriver"=>"Aéroport de Constantine - Mohamed Boudiaf",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'05:40:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA725', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '09:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:05:00', 
'duree_vol' => '00:50',

'num_ville_depart'=>58,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Constantine',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3720',
"id_avion" => 43, 
"code_aeroport_depart" => "CZL",
"nom_aeroport_depart"=>"Aéroport de Constantine - Mohamed Boudiaf", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 

DB::table('Vols')->insert([

'num_vol' =>'FA726', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:10:00', 

'duree_vol' => '00:50',

'num_ville_depart'=>51,
'num_ville_arriver'=>58, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Constantine', 


'prix_vol' => '3720',
"id_avion" => 44, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "CZL",
"nom_aeroport_arriver"=>"Aéroport de Constantine - Mohamed Boudiaf",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'06:50:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA727', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '13:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '14:15:00', 
'duree_vol' => '00:50',
'num_ville_depart'=>58,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Constantine',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3720',
"id_avion" => 44, 
"code_aeroport_depart" => "CZL",
"nom_aeroport_depart"=>"Aéroport de Constantine - Mohamed Boudiaf", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'12:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 


// Tlemcen

DB::table('Vols')->insert([

'num_vol' =>'FA728', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:25:00', 
'duree_vol' => '01:05',

'num_ville_depart'=>51,
'num_ville_arriver'=>59, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Tlemcen', 


'prix_vol' => '4900',
"id_avion" => 44, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "TLM",
"nom_aeroport_arriver"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'06:50:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA729', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:40:00', 
'duree_vol' => '01:05',

'num_ville_depart'=>59,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Tlemcen',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4900',
"id_avion" => 44, 
"code_aeroport_depart" => "TLM",
"nom_aeroport_depart"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'14:40:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]); 



DB::table('Vols')->insert([

'num_vol' =>'FA730', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '14:25', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '15:30:00', 
'duree_vol' => '01:05',

'num_ville_depart'=>51,
'num_ville_arriver'=>59, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Tlemcen', 


'prix_vol' => '4900',
"id_avion" => 45, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "TLM",
"nom_aeroport_arriver"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'13:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA731', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '19:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '20:05:00', 
'duree_vol' => '01:05',

'num_ville_depart'=>59,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Tlemcen',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4900',
"id_avion" => 45, 
"code_aeroport_depart" => "TLM",
"nom_aeroport_depart"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'18:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// oran
DB::table('Vols')->insert([

'num_vol' =>'FA732', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:10:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Oran', 


'prix_vol' => '4250',
"id_avion" => 46, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA733', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '10:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '11:30:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>60,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4250',
"id_avion" => 46, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'10:00:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA734', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '11:05:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '12:05:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Oran', 


'prix_vol' => '4250',
"id_avion" => 47, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'10:35:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA735', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '22:50:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '23:50:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>60,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Alger', 


'prix_vol' => '4250',
"id_avion" => 47, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'22:20:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// hassi messaoud

DB::table('Vols')->insert([

'num_vol' =>'FA736', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '11:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '13:00:00', 
'duree_vol' => '01:40',

'num_ville_depart'=>51,
'num_ville_arriver'=>61, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Hassi Messaoud', 


'prix_vol' => '6200',
"id_avion" => 48, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "HME",
"nom_aeroport_arriver"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'10:50:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA737', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '17:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '19:10:00', 
'duree_vol' => '01:40',

'num_ville_depart'=>61,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Hassi Messaoud',  
'ville_arriver' => 'Alger', 


'prix_vol' => '6200',
"id_avion" => 48, 
"code_aeroport_depart" => "HME",
"nom_aeroport_depart"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'17:00:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA738', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:40:00', 
'duree_vol' => '01:40',

'num_ville_depart'=>51,
'num_ville_arriver'=>61, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Hassi Messaoud', 


'prix_vol' => '6200',
"id_avion" => 49, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "HME",
"nom_aeroport_arriver"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:30:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA739', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '00:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '02:05:00', 
'duree_vol' => '01:40',

'num_ville_depart'=>61,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Hassi Messaoud',  
'ville_arriver' => 'Alger', 


'prix_vol' => '6200',
"id_avion" => 49, 
"code_aeroport_depart" => "HME",
"nom_aeroport_depart"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'23:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
// el oued
DB::table('Vols')->insert([

'num_vol' =>'FA740', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '08:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '09:45:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>62, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'El Oued', 


'prix_vol' => '11500',
"id_avion" => 50, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "ELU",
"nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'07:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA741', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '14:45:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:15:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>62,
'num_ville_arriver'=>51, 
'ville_depart'=> 'El Oued',  
'ville_arriver' => 'Alger', 


'prix_vol' => '11500',
"id_avion" => 50, 
"code_aeroport_depart" => "ELU",
"nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'14:15:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA742', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '05:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '06:50:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>62, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'El Oued', 


'prix_vol' => '11500',
"id_avion" => 51, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "ELU",
"nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'04:50:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA743', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '12:50:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '14:20:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>62,
'num_ville_arriver'=>51, 
'ville_depart'=> 'El Oued',  
'ville_arriver' => 'Alger', 


'prix_vol' => '11500',
"id_avion" => 51, 
"code_aeroport_depart" => "ELU",
"nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'12:20:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
// Bayadh
DB::table('Vols')->insert([

'num_vol' =>'FA744', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:30:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>51,
'num_ville_arriver'=>63, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'El Bayadh', 


'prix_vol' => '10400',
"id_avion" => 52, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "EBH",
"nom_aeroport_arriver"=>"Aéroport d'El Bayadh",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA745', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:40:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>63,
'num_ville_arriver'=>51, 
'ville_depart'=> 'El Bayadh',  
'ville_arriver' => 'Alger', 


'prix_vol' => '10400',
"id_avion" => 52, 
"code_aeroport_depart" => "EBH",
"nom_aeroport_depart"=>"Aéroport d'El Bayadh", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'14:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA746', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '07:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '08:30:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>51,
'num_ville_arriver'=>63, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'El Bayadh', 


'prix_vol' => '10400',
"id_avion" => 53, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "EBH",
"nom_aeroport_arriver"=>"Aéroport d'El Bayadh",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'06:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA747', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:40:00', 
'duree_vol' => '01:15',

'num_ville_depart'=>63,
'num_ville_arriver'=>51, 
'ville_depart'=> 'El Bayadh',  
'ville_arriver' => 'Alger', 


'prix_vol' => '10400',
"id_avion" => 53, 
"code_aeroport_depart" => "EBH",
"nom_aeroport_depart"=>"Aéroport d'El Bayadh", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'14:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
// setif
DB::table('Vols')->insert([

'num_vol' =>'FA748', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '06:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '06:45:00', 
'duree_vol' => '00:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>64, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Sétif', 


'prix_vol' => '2750',
"id_avion" => 54, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "QSF",
"nom_aeroport_arriver"=>"Aéroport de Sétif - 8 Mai 1945",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'05:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA749', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '12:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '12:55:00', 
'duree_vol' => '00:30',

'num_ville_depart'=>64,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Sétif',  
'ville_arriver' => 'Alger', 


'prix_vol' => '2750',
"id_avion" => 54, 
"code_aeroport_depart" => "QSF",
"nom_aeroport_depart"=>"Aéroport de Sétif - 8 Mai 1945", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'11:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA750', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '10:55:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '11:25:00', 
'duree_vol' => '00:30',

'num_ville_depart'=>51,
'num_ville_arriver'=>64, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Sétif', 


'prix_vol' => '2750',
"id_avion" => 55, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "QSF",
"nom_aeroport_arriver"=>"Aéroport de Sétif - 8 Mai 1945",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'10:25:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA751', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '20:40:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '21:10:00', 
'duree_vol' => '00:30',

'num_ville_depart'=>64,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Sétif',  
'ville_arriver' => 'Alger', 


'prix_vol' => '2750',
"id_avion" => 55, 
"code_aeroport_depart" => "QSF",
"nom_aeroport_depart"=>"Aéroport de Sétif - 8 Mai 1945", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'20:10:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
// Biskra

DB::table('Vols')->insert([

'num_vol' =>'FA752', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '10:35:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '11:35:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>65, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Biskra', 


'prix_vol' => '3420',
"id_avion" => 56, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "BSK",
"nom_aeroport_arriver"=>"Aéroport de Biskra - Mohamed Khider",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'10:05:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA753', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '15:35:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '16:35:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>65,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Biskra',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3420',
"id_avion" => 56, 
"code_aeroport_depart" => "BSK",
"nom_aeroport_depart"=>"Aéroport de Biskra - Mohamed Khider", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'15:05:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);


DB::table('Vols')->insert([

'num_vol' =>'FA754', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '09:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:10:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>51,
'num_ville_arriver'=>65, 
'ville_depart'=> 'Alger',  
'ville_arriver' => 'Biskra', 


'prix_vol' => '3420',
"id_avion" => 57, 
"code_aeroport_depart" => "ALG",
"nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
"code_aeroport_arriver" => "BSK",
"nom_aeroport_arriver"=>"Aéroport de Biskra - Mohamed Khider",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:40:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA755', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '12:15:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '13:15:00', 
'duree_vol' => '01:00',

'num_ville_depart'=>65,
'num_ville_arriver'=>51, 
'ville_depart'=> 'Biskra',  
'ville_arriver' => 'Alger', 


'prix_vol' => '3420',
"id_avion" => 57, 
"code_aeroport_depart" => "BSK",
"nom_aeroport_depart"=>"Aéroport de Biskra - Mohamed Khider", 
"code_aeroport_arriver" => "ALG",
"nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'11:45:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>200,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);



// oran vers international 
// oran vers paris 


DB::table('Vols')->insert([

'num_vol' =>'FA756', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '14:50:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '17:25:00', 
'duree_vol' => '02:35',

'num_ville_depart'=>60,
'num_ville_arriver'=>1, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Paris', 


'prix_vol' => '54010',
"id_avion" => 46, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella",

"code_aeroport_arriver" => "CDG",
"nom_aeroport_arriver"=>"Aéroport de Paris-Charles-de-Gaulle", 


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'14:20:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA757', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '20:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '22:55:00', 
'duree_vol' => '02:35',

'num_ville_depart'=>1,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Paris',  
'ville_arriver' => 'Oran', 


'prix_vol' => '54010',
"id_avion" => 46, 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_depart" => "CDG",
"nom_aeroport_depart"=>"Aéroport de Paris-Charles-de-Gaulle",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'19:50:00',  
"porte_embarquement"=>"p2", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// ORAN vers marseille 

DB::table('Vols')->insert([

'num_vol' =>'FA758', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '09:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:45:00', 
'duree_vol' => '01:45',

'num_ville_depart'=>60,
'num_ville_arriver'=>3, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Marseille', 


'prix_vol' => '34160',
"id_avion" => 58, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella",

"code_aeroport_arriver" => "MRS",
"nom_aeroport_arriver"=>"Aéroport de Marseille Provence", 


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:30:00',  
"porte_embarquement"=>"p2", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA759', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '17:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '19:15:00', 
'duree_vol' => '01:45',

'num_ville_depart'=>3,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Marseille',  
'ville_arriver' => 'Oran', 


'prix_vol' => '34160',
"id_avion" => 58, 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_depart" => "MRS",
"nom_aeroport_depart"=>"Aéroport de Marseille Provence",


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'17:00:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// oran vers turkie


DB::table('Vols')->insert([

'num_vol' =>'FA760', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '09:25:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '13:15:00', 
'duree_vol' => '03:50',

'num_ville_depart'=>60,
'num_ville_arriver'=>19, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Istanbul', 


'prix_vol' => '49710',
"id_avion" => 59, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella",

"code_aeroport_arriver" => "ISL",
"nom_aeroport_arriver"=>"Aéroport Atatürk d'Istanbul", 


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:55:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA761', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '19:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '22:50:00', 
'duree_vol' => '03:50',

'num_ville_depart'=>19,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Istanbul',  
'ville_arriver' => 'Oran', 


'prix_vol' => '49710',
"id_avion" => 59, 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_depart" => "ISL",
"nom_aeroport_depart"=>"Aéroport Atatürk d'Istanbul",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'17:00:00',  
"porte_embarquement"=>"p4", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// oran vers maroc 



DB::table('Vols')->insert([

'num_vol' =>'FA762', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '14:20:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '15:40:00', 
'duree_vol' => '01:20',

'num_ville_depart'=>60,
'num_ville_arriver'=>42, 
'ville_depart'=> 'Oran',  
'ville_arriver' => 'Casablanca', 


'prix_vol' => '21500',
"id_avion" => 47, 
"code_aeroport_depart" => "ORN",
"nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella",

"code_aeroport_arriver" => "CMN",
"nom_aeroport_arriver"=>"Aéroport Mohammed-V de Casablanca", 


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'13:50:00',  
"porte_embarquement"=>"p4", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA763', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '17:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '18:30:00', 
'duree_vol' => '01:20',

'num_ville_depart'=>42,
'num_ville_arriver'=>60, 
'ville_depart'=> 'Casablanca',  
'ville_arriver' => 'Oran', 


'prix_vol' => '21500',
"id_avion" => 47, 
"code_aeroport_arriver" => "ORN",
"nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella", 
"code_aeroport_depart" => "CMN",
"nom_aeroport_depart"=>"Aéroport Mohammed-V de Casablanca",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'16:40:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
// annaba vers paris 


DB::table('Vols')->insert([

'num_vol' =>'FA764', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '13:00:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '15:20:00', 
'duree_vol' => '02:20',

'num_ville_depart'=>57,
'num_ville_arriver'=>1, 
'ville_depart'=> 'Annaba',  
'ville_arriver' => 'Paris', 


'prix_vol' => '42000',
"id_avion" => 42, 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat",

"code_aeroport_arriver" => "CDG",
"nom_aeroport_arriver"=>"Aéroport de Paris-Charles-de-Gaulle", 


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'12:30:00',  
"porte_embarquement"=>"p5", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA765', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '19:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '21:20:00', 
'duree_vol' => '02:10',

'num_ville_depart'=>1,
'num_ville_arriver'=>57, 
'ville_depart'=> 'Paris',  
'ville_arriver' => 'Annaba', 


'prix_vol' => '42000',
"id_avion" => 41, 

"code_aeroport_depart" => "CDG",
"nom_aeroport_depart"=>"Aéroport de Paris-Charles-de-Gaulle",
"code_aeroport_arriver" => "AAE",
"nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat", 

"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'18:40:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// annaba vers marseille 

DB::table('Vols')->insert([

'num_vol' =>'FA766', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '08:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '10:00:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>57,
'num_ville_arriver'=>3, 
'ville_depart'=> 'Annaba',  
'ville_arriver' => 'Marseille', 


'prix_vol' => '31000',
"id_avion" => 42, 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat",

"code_aeroport_arriver" => "MRS",
"nom_aeroport_arriver"=>"Aéroport de Marseille Provence", 


"num_terminal_depart"=>3, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:00:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA767', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '11:10:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '12:40:00', 
'duree_vol' => '01:30',

'num_ville_depart'=>3,
'num_ville_arriver'=>57, 
'ville_depart'=> 'Marseille',  
'ville_arriver' => 'Annaba', 


'prix_vol' => '31000',
"id_avion" => 41, 
"code_aeroport_arriver" => "MRS",
"nom_aeroport_arriver"=>"Aéroport de Marseille Provence", 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>3, 
"heure_embarquement"=>'10:40:00',  
"porte_embarquement"=>"p5", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// annaba vers turkie (decalage horaire )


DB::table('Vols')->insert([

'num_vol' =>'FA768', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '20:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '23:15:00', 
'duree_vol' => '02:45',

'num_ville_depart'=>57,
'num_ville_arriver'=>19, 
'ville_depart'=> 'Annaba',  
'ville_arriver' => 'Istanbul', 


'prix_vol' => '46000',
"id_avion" => 60, 
"code_aeroport_depart" => "AAE",
"nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat",

"code_aeroport_arriver" => "ISL",
"nom_aeroport_arriver"=>"Aéroport Atatürk d'Istanbul", 


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>1, 
"heure_embarquement"=>'20:00:00',  
"porte_embarquement"=>"p3", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA769', 
'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '02:30:00', 
'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '05:30:00', 
'duree_vol' => '03:00',

'num_ville_depart'=>19,
'num_ville_arriver'=>57, 
'ville_depart'=> 'Istanbul',  
'ville_arriver' => 'Annaba', 


'prix_vol' => '46000',
"id_avion" => 60, 
"code_aeroport_arriver" => "AAE",
"nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat", 
"code_aeroport_depart" => "ISL",
"nom_aeroport_depart"=>"Aéroport Atatürk d'Istanbul",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'02:00:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// el oued avec paris 

DB::table('Vols')->insert([

'num_vol' =>'FA770', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '10:50:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '13:35:00', 
'duree_vol' => '02:45',

'num_ville_depart'=>62,
'num_ville_arriver'=>1, 
'ville_depart'=> 'El Oued',  
'ville_arriver' => 'Paris', 


'prix_vol' => '35000',
"id_avion" => 60, 
"code_aeroport_depart" => "ELU",
"nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar",

"code_aeroport_arriver" => "CDG",
"nom_aeroport_arriver"=>"Aéroport de Paris-Charles-de-Gaulle", 


"num_terminal_depart"=>1, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'10:20:00',  
"porte_embarquement"=>"p4", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA771', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '17:35:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '20:05:00', 
'duree_vol' => '02:30',

'num_ville_depart'=>1,
'num_ville_arriver'=>62, 
'ville_depart'=> 'Paris',  
'ville_arriver' => 'El Oued', 


'prix_vol' => '35000',
"id_avion" => 59, 

"code_aeroport_depart" => "CDG",
"nom_aeroport_depart"=>"Aéroport de Paris-Charles-de-Gaulle",
"code_aeroport_arriver" => "ELU",
"nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar", 

"num_terminal_depart"=>3, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'14:05:00',  
"porte_embarquement"=>"p2", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);

// el oued vers marseille (escale)

DB::table('Vols')->insert([

'num_vol' =>'FA772', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '09:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '15:50:00', 
'duree_vol' => '06:15',

'num_ville_depart'=>62,
'num_ville_arriver'=>3, 
'ville_depart'=> 'El Oued',  
'ville_arriver' => 'Marseille', 


'prix_vol' => '29500',
"id_avion" => 61, 
"code_aeroport_depart" => "ELU",
"nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar",

"code_aeroport_arriver" => "MRS",
"nom_aeroport_arriver"=>"Aéroport de Marseille Provence", 


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'08:55:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);   


DB::table('Vols')->insert([

'num_vol' =>'FA773', 
'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
'heure_depart'=> '11:30:00', 
'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
'heure_arriver'=>  '18:25:00', 
'duree_vol' => '06:55',

'num_ville_depart'=>3,
'num_ville_arriver'=>62, 
'ville_depart'=> 'Marseille',  
'ville_arriver' => 'El Oued', 


'prix_vol' => '29500',
"id_avion" => 61, 
"code_aeroport_depart" => "MRS",
"nom_aeroport_depart"=>"Aéroport de Marseille Provence", 
"code_aeroport_arriver" => "ELU",
"nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar",


"num_terminal_depart"=>2, 
"num_terminal_arriver"=>2, 
"heure_embarquement"=>'11:00:00',  
"porte_embarquement"=>"p1", 
"prix_bagage_sup"=>1000,

// "created_at" => Carbon::now(),
// "updated_at" => Carbon::now(),

]);
        }
      }

    }
// Amerique  AHMED ZOURDANI 
$i=0;
for ($month = 1; $month < 7; $month++) 
{
  for ($day = 1; $day < 32; $day++)
   {

    if (($day == 28 & $month == 2) | ($month % 2 == 0 & $day == 30) | $day == 31) 
    {
      $next_day = 1;
      $next_month = $month + 1;
    } else 
    {
      $next_day = $day + 1;
      $next_month = $month;
    }

    if (($month == 1 & $day > 14) | ($month == 2 & $day < 29) | ($month > 2 & $month < 6 & $day < 31) | ($month != 2 & $day == 31 & $month % 2 != 0) | ($month == 6 & $day < 16))
     {
       if (($i%7==0) | ($i%3==0)){

       
    
              //Montréal
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA200',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '12:10:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '20:30:00',
                'duree_vol' => '08:20',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 26,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Montréal',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '81000',
                "id_avion" => 81,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène",
                "code_aeroport_arriver" => "YMX",
                "nom_aeroport_arriver" => "Aéroport international Montréal-Mirabel",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '11:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
              //Montréal
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA201',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '10:00:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' => '18:20:00',
                'duree_vol' => '08:20',
    
                'num_ville_depart' => 26,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Montréal',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '81000',
                "id_avion" => 81,
                "code_aeroport_depart" => "YMX",
                "nom_aeroport_depart" => " Aéroport international Montréal-Mirabel",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '09:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
    
    
    
              //NEW YORK 
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA202',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '10:30:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:30:00',
                'duree_vol' => '11:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 27,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'New York',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '76500',
                "id_avion" => 82,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "JFK",
                "nom_aeroport_arriver" => "Aéroport international John-F.-Kennedy de New York",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '09:00:00',
                "porte_embarquement" => "p0",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //NEY YORK
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA203',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '04:00:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '15:20:00',
                'duree_vol' => '08:20',
    
                'num_ville_depart' => 27,
                'num_ville_arriver' => 51,
                'ville_depart' => 'New York',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '76500',
                "id_avion" => 82,
                "code_aeroport_depart" => "JFK",
                "nom_aeroport_depart" => " Aéroport international John-F.-Kennedy de New York",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '03:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
              //SAN FRANCESCO
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA204',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '06:30:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:30:00',
                'duree_vol' => '15:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 28,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'San Francisco',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '101000',
                "id_avion" => 83,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "SFO",
                "nom_aeroport_arriver" => "Aéroport international de San Francisco",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '06:00:00',
                "porte_embarquement" => "p2",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //SAN FRANCISCO
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA205',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '04:00:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '19:00:00',
                'duree_vol' => '15:00',
    
                'num_ville_depart' => 28,
                'num_ville_arriver' => 51,
                'ville_depart' => 'San Francisco',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '101000',
                "id_avion" => 83,
                "code_aeroport_depart" => "SFO",
                "nom_aeroport_depart" => " Aéroport international de San Francisco",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '3:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              } 
              $i++;
            }
          }
        }
              // Asie  AMMAN

               $i=0;
           for($month=1;$month<7;$month++){
                for($day=1;$day<32;$day++){

                      if(($day==28 & $month==2) | ($month%2==0 & $day==30) | $day==31){  
                            $next_day=1;
                             $next_month=$month+1;
                      }else{
                             $next_day=$day+1;
                              $next_month=$month;
                            }

  if(($month==1 & $day>14) | ($month==2 & $day<29) | ($month>2 & $month<6 & $day<31) | ($month>2 & $day==31 & $month%2!=0 ) | ($month==6 & $day<16)){
    
    if($i%7==0) { 
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA500',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '14:15:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '18:50:00',
                'duree_vol' => '04:35:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 29,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Amman',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '39000',
                "id_avion" => 84,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "AMM",
                "nom_aeroport_arriver" => "Aéroport international Queen Alia مطار الملكة علياء الدولي Matar Al-Malikah Alia Ad-Dowali",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '13:45:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //AMMAN
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA501',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '17:00:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:35:00',
                'duree_vol' => '04:35:00',
    
                'num_ville_depart' => 29,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Amman',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '39000',
                "id_avion" => 84,
                "code_aeroport_depart" => "AMM",
                "nom_aeroport_depart" => " Aéroport international Queen Alia مطار الملكة علياء الدولي
          Matar Al-Malikah Alia Ad-Dowali",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '16:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
              //PEKIN
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA502',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '08:23:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '19:23:00',
                'duree_vol' => '11:00:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 30,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Pékin',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '58120',
                "id_avion" => 85,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "PEK",
                "nom_aeroport_arriver" => "Aéroport international de Pékin-Capitale",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '08:00:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //PEKIN
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA503',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '06:53:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '17:53:00',
                'duree_vol' => '11:00',
    
                'num_ville_depart' => 30,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Pékin',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '58120',
                "id_avion" => 85,
                "code_aeroport_depart" => "PEK",
                "nom_aeroport_depart" => " Aéroport international de Pékin-Capitale",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '06:25:00',
                "porte_embarquement" => "p0",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //Doha
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA504',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '13:25:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '19:05:00',
                'duree_vol' => '05:40',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 31,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Doha',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '51000',
                "id_avion" => 86,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "DOH",
                "nom_aeroport_arriver" => "Aéroport international Hamad",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '13:10:00',
                "porte_embarquement" => "p2",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //PEKIN
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA505',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '11:43:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '16:33:00',
                'duree_vol' => '05:40',
    
                'num_ville_depart' => 31,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Doha',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '51000',
                "id_avion" => 86,
                "code_aeroport_depart" => "DOH",
                "nom_aeroport_depart" => " Aéroport international Hamad",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '11:27:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
              //ABU DHABI
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA506',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '15:44:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:34:00',
                'duree_vol' => '07:50',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 32,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Abou Dhabi',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '71000',
                "id_avion" => 87,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "AUH",
                "nom_aeroport_arriver" => "Aéroport international d'Abou Dabi مطار أبو ظبي الدولي",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '15:30:00',
                "porte_embarquement" => "p2",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //ABU DHABI
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA507',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '09:40:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '16:30:00',
                'duree_vol' => '07:50',
    
                'num_ville_depart' => 32,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Abou Dhabi',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '71000',
                "id_avion" => 87,
                "code_aeroport_depart" => "AUH",
                "nom_aeroport_depart" => " Aéroport international d'Abou Dabi مطار أبو ظبي الدولي",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '09:00:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
              //BEYROUTH
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA508',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '08:10:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '12:00:00',
                'duree_vol' => '03:50',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 33,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Beyrouth',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '310000',
                "id_avion" => 88,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "BEY",
                "nom_aeroport_arriver" => "Aéroport international de Beyrouth - Rafic Hariri",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '7:45:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //BEYROUTH
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA509',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '18:10:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:00:00',
                'duree_vol' => '03:50',
    
                'num_ville_depart' => 33,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Beyrouth',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '310000',
                "id_avion" => 88,
                "code_aeroport_depart" => "BEY",
                "nom_aeroport_depart" => " Aéroport international de Beyrouth - Rafic Hariri",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '17:40:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
              //TOKYO
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA510',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '05:00:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '20:00:00',
                'duree_vol' => '15:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 34,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Tokyo',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '91000',
                "id_avion" => 89,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "HND",
                "nom_aeroport_arriver" => "Aéroport international Haneda de Tokyo",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '4:45:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //TOKYO
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA511',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:00:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:00:00',
                'duree_vol' => '15:00',
    
                'num_ville_depart' => 34,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Tokyo',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '91000',
                "id_avion" => 89,
                "code_aeroport_depart" => "HND",
                "nom_aeroport_depart" => "Aéroport international Haneda de Tokyo",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '06:40:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
              //DELHI
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA512',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '05:15:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '16:15:00',
                'duree_vol' => '11:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 35,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Delhi',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '64000',
                "id_avion" => 90,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "DEL",
                "nom_aeroport_arriver" => "Aéroport international Indira-Gandhi",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '5:00:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //DELHI
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA513',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:40:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '18:40:00',
                'duree_vol' => '11:00',
    
                'num_ville_depart' => 35,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Delhi',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '64000',
                "id_avion" => 90,
                "code_aeroport_depart" => "DEL",
                "nom_aeroport_depart" => "Aéroport international Indira-Gandhi",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '07:10:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
              //SINGAPOUR
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA512',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '5:10:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:20:00',
                'duree_vol' => '16:10',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 36,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Singapour',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '64000',
                "id_avion" => 91,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "SIN",
                "nom_aeroport_arriver" => "Aéroport de Singapour-Changi",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '4:45:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //SINGAPOUR
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA513',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:40:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:50:00',
                'duree_vol' => '16:10',
    
                'num_ville_depart' => 36,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Singapour',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '64000',
                "id_avion" => 91,
                "code_aeroport_depart" => "SIN",
                "nom_aeroport_depart" => "Aéroport de Singapour-Changi",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '07:10:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
              //Malaisie
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA514',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '5:30:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '21:45:00',
                'duree_vol' => '16:15',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 37,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Kuala Lampour',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '70000',
                "id_avion" => 92,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "KUL",
                "nom_aeroport_arriver" => "Aéroport international de Kuala Lumpur",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '5:15:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //SINGAPOUR
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA515',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:55:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:05:00',
                'duree_vol' => '16:15',
    
                'num_ville_depart' => 37,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Kuala Lampur',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '70000',
                "id_avion" => 92,
                "code_aeroport_depart" => "KUL",
                "nom_aeroport_depart" => "Aéroport international de Kuala Lumpur",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '07:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
              //BANKOK
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA516',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:13:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:23:00',
                'duree_vol' => '15:10',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 38,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Bangkok',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '130000',
                "id_avion" => 93,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "BKK",
                "nom_aeroport_arriver" => "Aéroport de Bangkok-Suvarnabhumi",
    
    
                "num_terminal_depart" => 3,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '06:58:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //BANGKOK
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA517',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '06:55:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:05:00',
                'duree_vol' => '15:10',
    
                'num_ville_depart' => 38,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Bangkok',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '130000',
                "id_avion" => 93,
                "code_aeroport_depart" => "BKK",
                "nom_aeroport_depart" => "Aéroport de Bangkok-Suvarnabhumi",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 3,
                "heure_embarquement" => '06:30:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
    
              //SEOUL
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA518',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '05:24:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:24:00',
                'duree_vol' => '17:00',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 39,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Séoul',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '97500',
                "id_avion" => 94,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "ICN",
                "nom_aeroport_arriver" => "Aéroport international d'Incheon",
    
    
                "num_terminal_depart" => 2,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '05:00:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //SEOUL
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA519',
                'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '06:40:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '23:40:00',
                'duree_vol' => '17:00',
    
                'num_ville_depart' => 39,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Séoul',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '97500',
                "id_avion" => 94,
                "code_aeroport_depart" => "ICN",
                "nom_aeroport_depart" => "Aéroport international d'Incheon",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 2,
                "heure_embarquement" => '06:15:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
    
    
    
              //HANOI
    
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA520',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '07:24:00',
                'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:44:00',
                'duree_vol' => '15:20',
    
                'num_ville_depart' => 51,
                'num_ville_arriver' => 40,
                'ville_depart' => 'Alger',
                'ville_arriver' => 'Hanoi',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '72500',
                "id_avion" => 95,
                "code_aeroport_depart" => "ALG",
                "nom_aeroport_depart" => " Aéroport d’Alger-Houari-Boumédiène ",
                "code_aeroport_arriver" => "HAN",
                "nom_aeroport_arriver" => "Aéroport international de Nội Bài",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '07:00:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
              //HANOI
    
              DB::table('Vols')->insert([
    
                'num_vol' => 'FA521',
                'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
                'heure_depart' => '06:55:00',
                'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
                'heure_arriver' =>  '22:15:00',
                'duree_vol' => '15:20',
    
                'num_ville_depart' => 40,
                'num_ville_arriver' => 51,
                'ville_depart' => 'Hanoi',
                'ville_arriver' => 'Alger',
                //'nombre_place_restante' => 00,
    
                'prix_vol' => '72500',
                "id_avion" => 95,
                "code_aeroport_depart" => "HAN",
                "nom_aeroport_depart" => "Aéroport international de Nội Bài",
                "code_aeroport_arriver" => "ALG",
                "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
    
    
                "num_terminal_depart" => 1,
                "num_terminal_arriver" => 1,
                "heure_embarquement" => '06:35:00',
                "porte_embarquement" => "p1",
                "prix_bagage_sup" => 1000,
    
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
              ]);
               //Afriqueeeeeeeeeeeeeeeeeeeeeeeeeeeeee 
                        
                //Mauritanie
                      // alger vers NOUAKCHOUT 
                      DB::table('Vols')->insert([
                  
                        'num_vol' =>'FA774', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '19:00:00', 
                        'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '23:15:00', 
                        'duree_vol' => '04:15',
                         
                         'num_ville_depart'=>51,
                         'num_ville_arriver'=>49, 
                         'ville_depart'=> 'Alger',  
                         'ville_arriver' => 'Nouakchott', 
                          
                         
                         'prix_vol' => '29320',
                          "id_avion" => 62, 
                          "code_aeroport_depart" => "ALG",
                             "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                      
                           "code_aeroport_arriver" => "NKC",
                            "nom_aeroport_arriver"=>"Aéroport international de Nouakchott-Oumtounsy", 
                            
                        
                         "num_terminal_depart"=>2, 
                         "num_terminal_arriver"=>1, 
                         "heure_embarquement"=>'18:30:00',  
                         "porte_embarquement"=>"p2", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);   
                      
                      
                      DB::table('Vols')->insert([
                        
                        'num_vol' =>'FA775', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '23:15:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '04:00:00', 
                        'duree_vol' => '04:15',
                         
                         'num_ville_depart'=>49,
                         'num_ville_arriver'=>51, 
                         'ville_depart'=> 'Nouakchott',  
                         'ville_arriver' => 'Alger', 
                          
                         
                         'prix_vol' => '29320',
                          "id_avion" => 62, 
                           "code_aeroport_arriver" => "ALG",
                            "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène", 
                            "code_aeroport_depart" => "NKC",
                             "nom_aeroport_depart"=>"Aéroport international de Nouakchott-Oumtounsy",
                      
                        
                         "num_terminal_depart"=>1, 
                         "num_terminal_arriver"=>2, 
                         "heure_embarquement"=>'22:45:00',  
                         "porte_embarquement"=>"p3", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);
                      
                      
                      // ALGER VERS ABIDJAN  
                
                
                      DB::table('Vols')->insert([
                  
                        'num_vol' =>'FA776', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '19:00:00', 
                        'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '23:50:00', 
                        'duree_vol' => '04:50',
                         
                         'num_ville_depart'=>51,
                         'num_ville_arriver'=>48, 
                         'ville_depart'=> 'Alger',  
                         'ville_arriver' => 'Abidjan', 
                          
                         
                         'prix_vol' => '35838',
                          "id_avion" => 63, 
                          "code_aeroport_depart" => "ALG",
                             "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                      
                           "code_aeroport_arriver" => "ABJ",
                            "nom_aeroport_arriver"=>"Aéroport international Félix-Houphouët-Boigny", 
                            
                        
                         "num_terminal_depart"=>3, 
                         "num_terminal_arriver"=>1, 
                         "heure_embarquement"=>'18:30:00',  
                         "porte_embarquement"=>"p2", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);   
                      
                      
                      DB::table('Vols')->insert([
                        
                        'num_vol' =>'FA777', 
                        'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '01:50:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '06:40:00', 
                        'duree_vol' => '04:50',
                         
                         'num_ville_depart'=>48,
                         'num_ville_arriver'=>51, 
                         'ville_depart'=> 'Abidjan',  
                         'ville_arriver' => 'Alger', 
                          
                         
                         'prix_vol' => '35838',
                          "id_avion" => 63, 
                           "code_aeroport_arriver" => "ALG",
                            "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène", 
                            "code_aeroport_depart" => "ABJ",
                             "nom_aeroport_depart"=>"Aéroport international Félix-Houphouët-Boigny",
                      
                        
                         "num_terminal_depart"=>2, 
                         "num_terminal_arriver"=>3, 
                         "heure_embarquement"=>'01:20:00',  
                         "porte_embarquement"=>"p3", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);
                      //Kenya
                       // ALGER VERS NAIROBI 
                
                       DB::table('Vols')->insert([
                  
                        'num_vol' =>'FA778', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '09:50:00', 
                        'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '21:45:00', 
                        'duree_vol' => '14:50',
                         
                         'num_ville_depart'=>51,
                         'num_ville_arriver'=>47, 
                         'ville_depart'=> 'Alger',  
                         'ville_arriver' => 'Nairobi', 
                          
                         
                         'prix_vol' => '123200',
                          "id_avion" => 64, 
                          "code_aeroport_depart" => "ALG",
                             "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                      
                           "code_aeroport_arriver" => "NBO",
                            "nom_aeroport_arriver"=>"Aéroport international Jomo-Kenyatta", 
                            
                        
                         "num_terminal_depart"=>2, 
                         "num_terminal_arriver"=>1, 
                         "heure_embarquement"=>'09:20:00',  
                         "porte_embarquement"=>"p1", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);   
                      
                      
                      DB::table('Vols')->insert([
                        
                        'num_vol' =>'FA779', 
                        'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '04:20:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '15:25:00', 
                        'duree_vol' => '10:05',
                         
                         'num_ville_depart'=>47,
                         'num_ville_arriver'=>51, 
                         'ville_depart'=> 'Nairobi',  
                         'ville_arriver' => 'Alger', 
                          
                           'prix_vol' => '123200',
                         
                          "id_avion" => 64, 
                           "code_aeroport_arriver" => "ALG",
                            "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène", 
                            "code_aeroport_depart" => "NBO",
                             "nom_aeroport_depart"=>"Aéroport international Jomo-Kenyatta",
                      
                        
                         "num_terminal_depart"=>2, 
                         "num_terminal_arriver"=>3, 
                         "heure_embarquement"=>'03:50:00',  
                         "porte_embarquement"=>"p1", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);
                      //burkina faco
                      // ALGER VERS OUGADOUGOU
                
                      DB::table('Vols')->insert([
                  
                        'num_vol' =>'FA780', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '19:55:00', 
                        'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '23:10:00', 
                        'duree_vol' => '04:15',
                         
                         'num_ville_depart'=>51,
                         'num_ville_arriver'=>46, 
                         'ville_depart'=> 'Alger',  
                         'ville_arriver' => 'Ouagadougou', 
                          
                         
                         'prix_vol' => '35920',
                          "id_avion" => 65, 
                          "code_aeroport_depart" => "ALG",
                             "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                      
                           "code_aeroport_arriver" => "OUA",
                            "nom_aeroport_arriver"=>"Aéroport international de Ouagadougou", 
                            
                        
                         "num_terminal_depart"=>1, 
                         "num_terminal_arriver"=>3, 
                         "heure_embarquement"=>'19:25:00',  
                         "porte_embarquement"=>"p2", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);   
                      
                      
                      DB::table('Vols')->insert([
                        
                        'num_vol' =>'FA781', 
                        'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '01:10:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '05:25:00', 
                        'duree_vol' => '04:15',
                         
                         'num_ville_depart'=>46,
                         'num_ville_arriver'=>51, 
                         'ville_depart'=> 'Ouagadougou',  
                         'ville_arriver' => 'Alger', 
                          
                           'prix_vol' => '35920',
                         
                          "id_avion" => 65, 
                           "code_aeroport_arriver" => "ALG",
                            "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène", 
                            "code_aeroport_depart" => "OUA",
                             "nom_aeroport_depart"=>"Aéroport international de Ouagadougou",
                      
                        
                         "num_terminal_depart"=>3, 
                         "num_terminal_arriver"=>1, 
                         "heure_embarquement"=>'00:40:00',  
                         "porte_embarquement"=>"p2", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);
                      //Soudan
                      // ALGER VERS KHARTOUM 
                
                
                
                      DB::table('Vols')->insert([
                  
                        'num_vol' =>'FA782', 
                        'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '13:25:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '01:10:00', 
                        'duree_vol' => '11:45',
                         
                         'num_ville_depart'=>51,
                         'num_ville_arriver'=>50, 
                         'ville_depart'=> 'Alger',  
                         'ville_arriver' => 'Khartoum', 
                          
                         
                         'prix_vol' => '63000',
                          "id_avion" => 66, 
                          "code_aeroport_depart" => "ALG",
                             "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",
                      
                           "code_aeroport_arriver" => "KRT",
                            "nom_aeroport_arriver"=>"Aéroport international de Khartoum", 
                            
                        
                         "num_terminal_depart"=>2, 
                         "num_terminal_arriver"=>3, 
                         "heure_embarquement"=>'12:55:00',  
                         "porte_embarquement"=>"p1", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);   
                      
                      
                      DB::table('Vols')->insert([
                        
                        'num_vol' =>'FA783', 
                        'date_depart' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT),
                        'heure_depart'=> '07:10:00', 
                        'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
                        'heure_arriver'=>  '17:25:00', 
                        'duree_vol' => '10:15',
                         
                         'num_ville_depart'=>50,
                         'num_ville_arriver'=>51, 
                         'ville_depart'=> 'Khartoum',  
                         'ville_arriver' => 'Alger', 
                          
                           'prix_vol' => '63000',
                         
                          "id_avion" => 66, 
                           "code_aeroport_arriver" => "ALG",
                            "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène", 
                            "code_aeroport_depart" => "KRT",
                             "nom_aeroport_depart"=>"Aéroport international de Khartoum",
                      
                        
                         "num_terminal_depart"=>3, 
                         "num_terminal_arriver"=>1, 
                         "heure_embarquement"=>'06:50:00',  
                         "porte_embarquement"=>"p1", 
                         "prix_bagage_sup"=>1000,
                         
                          // "created_at" => Carbon::now(),
                         // "updated_at" => Carbon::now(),
                         
                      ]);
                     
//Maroc 
//Casablanca Aéroport Mohammed-V de Casablanca CMN 42 prix  17000 FA788 2 VOLS 70
//aller1
DB::table('Vols')->insert([
                  
  'num_vol' =>'FA788', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '09:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '10:55', 
  'duree_vol' => '01:55',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>42, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Casablanca', 
    
   
   'prix_vol' => '17000',
    "id_avion" => 70, 
    "code_aeroport_depart" => "ALG",
       "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

     "code_aeroport_arriver" => "CMN",
      "nom_aeroport_arriver"=>"Aéroport Mohammed-V de Casablanca", 
      
  
   "num_terminal_depart"=>2, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'08:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

//retou1
DB::table('Vols')->insert([
  
  'num_vol' =>'FA789', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '12:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '13:55', 
  'duree_vol' => '01:55',
   
   'num_ville_depart'=>42,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Casablanca',  
   'ville_arriver' => 'Alger', 
    
     'prix_vol' => '17000',
   
    "id_avion" => 70, 
     "code_aeroport_depart" => "CMN",
      "nom_aeroport_depart"=>"Aéroport Mohammed-V de Casablanca", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>3, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'11:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

//aller 2 FA790 70


DB::table('Vols')->insert([
                  
  'num_vol' =>'FA790', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '14:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '15:55', 
  'duree_vol' => '01:55',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>42, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Casablanca', 
    
   
   'prix_vol' => '17000',
    "id_avion" => 71, 
    "code_aeroport_depart" => "ALG",
       "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

     "code_aeroport_arriver" => "CMN",
      "nom_aeroport_arriver"=>"Aéroport Mohammed-V de Casablanca", 
      
  
   "num_terminal_depart"=>2, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'13:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

//retour2
DB::table('Vols')->insert([
  
  'num_vol' =>'FA791', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '17:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '01:55', 
  'duree_vol' => '18:55',
   
   'num_ville_depart'=>42,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Casablanca',  
   'ville_arriver' => 'Alger', 
    
     'prix_vol' => '17000',
   
    "id_avion" => 71, 
     "code_aeroport_depart" => "CMN",
      "nom_aeroport_depart"=>"Aéroport Mohammed-V de Casablanca", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>3, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'16:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

//MAli Aéroport international Modibo Keïta BKO FA792 Bamako 1 vol prix 39000  avion 72 43

DB::table('Vols')->insert([
                  
  'num_vol' =>'FA792', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '08:15', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '12:30', 
  'duree_vol' => '04:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>43, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Bamako', 
    
   
   'prix_vol' => '39000',
    "id_avion" => 72, 
    "code_aeroport_depart" => "ALG",
       "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

     "code_aeroport_arriver" => "BKO",
      "nom_aeroport_arriver"=>" Aéroport international Modibo Keïta", 
      
  
   "num_terminal_depart"=>2, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'07:45',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

//retour2
DB::table('Vols')->insert([
  
  'num_vol' =>'FA793', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '16:30', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '17:45', 
  'duree_vol' => '04:15',
   
   'num_ville_depart'=>43,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Bamako',  
   'ville_arriver' => 'Alger', 
    
     'prix_vol' => '39000',
   
    "id_avion" => 72, 
     "code_aeroport_depart" => "BKO",
      "nom_aeroport_depart"=>"Aéroport international Modibo Keïta", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>3, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'16:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

 // Afrique de sud Johannesbourg
 //vol 1 aller retour Aéroport international OR Tambo JNB 44 avion 73 FA794 prix 69000

DB::table('Vols')->insert([
                  
  'num_vol' =>'FA794', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '11:00', 
  'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '02:00', 
  'duree_vol' => '15:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>44, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Johannesbourg', 
    
   
   'prix_vol' => '69000',
    "id_avion" => 73, 
    "code_aeroport_depart" => "ALG",
       "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

     "code_aeroport_arriver" => "JNB",
      "nom_aeroport_arriver"=>"Aéroport international OR Tambo", 
      
  
   "num_terminal_depart"=>2, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'10:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

//retour2
DB::table('Vols')->insert([
  
  'num_vol' =>'FA795', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '08:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '23:15', 
  'duree_vol' => '15:15',
   
   'num_ville_depart'=>44,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Johannesbourg',  
   'ville_arriver' => 'Alger', 
    
     'prix_vol' => '69000',
   
    "id_avion" => 73, 
     "code_aeroport_depart" => "JNB",
      "nom_aeroport_depart"=>"Aéroport international OR Tambo", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>3, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'07:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

//Sénégal Diass 
//Aéroport international Blaise-Diagne DSS Diass  FA796  45 av 74  prix  57000

DB::table('Vols')->insert([
                  
  'num_vol' =>'FA796', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '18:55', 
  'duree_vol' => '04:55',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>45, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Diass', 
    
   
   'prix_vol' => '57000',
    "id_avion" => 74, 
    "code_aeroport_depart" => "ALG",
       "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",

     "code_aeroport_arriver" => "DSS",
      "nom_aeroport_arriver"=>"Aéroport international Blaise-Diagne ", 
      
  
   "num_terminal_depart"=>2, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'14:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

//retour2
DB::table('Vols')->insert([
  
  'num_vol' =>'FA797', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '23:00', 
  'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '03:00', 
  'duree_vol' => '04:55',
   
   'num_ville_depart'=>45,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Diass',  
   'ville_arriver' => 'Alger', 
    
     'prix_vol' => '75000',
   
    "id_avion" => 74, 
     "code_aeroport_depart" => "DSS",
      "nom_aeroport_depart"=>"Aéroport international Blaise-Diagne ", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>3, 
   "num_terminal_arriver"=>1, 
   "heure_embarquement"=>'22:30',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>1000,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
    }            
 $i++;

    }
     }
     } 


  }
}

