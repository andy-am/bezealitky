<?php

use Illuminate\Database\Seeder;

class TypeOfItemKindsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        // Kind Byty - Kind id 1

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "Garsónka",
            'slug' => "garsonka",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "1 izbový byt",
            'slug' => "1-izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "2 izbový byt",
            'slug' => "2-izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "3 izbový byt",
            'slug' => "3-izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "4 izbový byt",
            'slug' => "4-izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "5 izbový byt",
            'slug' => "5-izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "Viac ako 5 izbový byt",
            'slug' => "viac-ako-5--izbovy-byt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "Mezonet",
            'slug' => "mezonet",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "Apartmán",
            'slug' => "apartman",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 1,
            'name' => "Iný",
            'slug' => "iny",
            'description' => "desc"
        ]);


        // Kind Domy - Kind id 2

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Rodinný dom",
            'slug' => "rodinny-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Vidiecky dom",
            'slug' => "vidiecky-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Zrubový dom",
            'slug' => "zrubovy-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Rodinná vila",
            'slug' => "rodinna-vila",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Bungalov",
            'slug' => "bungalov",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Poľnohospodárstvo",
            'slug' => "polnohospodarstvo",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 2,
            'name' => "Iný",
            'slug' => "iny",
            'description' => "desc"
        ]);


        // Objekty - Kind id 3

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Nájomný dom",
            'slug' => "najomny-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Apartmánový dom",
            'slug' => "apartmanovy-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Administratívny objekt",
            'slug' => "administrativny-objekt",
            'description' => "desc"
        ]);


        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Polyfunkčný objekt",
            'slug' => "polyfunkcny-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Objekt pre obchod",
            'slug' => "objekt-pre-obchod",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Reštaurácia",
            'slug' => "restauracia",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Hotel",
            'slug' => "hotel",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Penzión",
            'slug' => "penzion",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Kúpeľný objekt",
            'slug' => "kupelny-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Objekt pre šport",
            'slug' => "objekt-pre-sport",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Iný komerčný objekt",
            'slug' => "iny-komercny-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Objekt pre výrobu",
            'slug' => "objekt-pre-vyrobu",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Sklad",
            'slug' => "sklad",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Prevádzkový areál",
            'slug' => "prevadzkovy-aral",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Poľnohosp. objekt",
            'slug' => "Poľnohosp-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Opravárensky objekt",
            'slug' => "opravarensky-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Čerpacia stanica",
            'slug' => "kupelny-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Iný prevádzkový objekt",
            'slug' => "iny-prevadzkovy-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Garáž",
            'slug' => "garaz",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Spevnené plochy",
            'slug' => "spevnene-plochy",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Malá elektráreň",
            'slug' => "mala-elektraren",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Historický objekt",
            'slug' => "historicky-objekt",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 3,
            'name' => "Iný objekt",
            'slug' => "iný-objekt",
            'description' => "desc"
        ]);

        // Priestory - Kind id 4


        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Kancelária admin. priestor",
            'slug' => "kancelaria-admin-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Obchodny priestor",
            'slug' => "obchodny-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Reštauračný priestor",
            'slug' => "restauracny-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Športový priestor",
            'slug' => "sportovy-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Iný komerčný priestor",
            'slug' => "iny-komercny-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Výrobný priestor",
            'slug' => "vyrobny-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Skladový priestor",
            'slug' => "skladovy-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Opravárensky priestor",
            'slug' => "opravarensky-priestor",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 4,
            'name' => "Iný prevádzkový priestor",
            'slug' => "iny-prevadzkovy-priestor",
            'description' => "desc"
        ]);


        // Rekreačné Domy - Kind id 5

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Chata",
            'slug' => "chata",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Chalupa",
            'slug' => "chalupa",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Zrub",
            'slug' => "zrub",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Drevenica",
            'slug' => "drevenica",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Záhradná chatka",
            'slug' => "zahradná-chatka",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 5,
            'name' => "Iný",
            'slug' => "iny",
            'description' => "desc"
        ]);

        // Pozemky - Kind id 6


        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Pozemok pre rodinný dom",
            'slug' => "pozemok-pre-rodinny-dom",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Rekreačný pozemok",
            'slug' => "rekreacny-pozemok",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Pozemok pre bytovú výstavbu",
            'slug' => "pozemok-pre-bytovu-vystavbu",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Pozemok pre občiansku vybavenosť",
            'slug' => "pozemok-pre-obciansku-vybavenost",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Zmiešaná zóna",
            'slug' => "zmiesana-zona",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Komerčná zóna",
            'slug' => "komercna-zona",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Priemyselná zóna",
            'slug' => "priemyselná-zona",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Iný stavebný pozemok",
            'slug' => "iny-stavebny-pozemok",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Záhrada",
            'slug' => "zahrada",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Orná pôda",
            'slug' => "orna-poda",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Sad",
            'slug' => "sad",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Lúka",
            'slug' => "luka",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Pasienky",
            'slug' => "pasienky",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Chmelnica",
            'slug' => "chmelnica",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Vinica",
            'slug' => "vinica",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Les",
            'slug' => "les",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Rybník",
            'slug' => "rybnik",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Vodná plocha",
            'slug' => "vodna-plocha",
            'description' => "desc"
        ]);

        DB::table('item_types')->insert([
            'item_kind_id' => 6,
            'name' => "Iný poľnohosp. pozemok",
            'slug' => "iny-polnohosp-pozemok",
            'description' => "desc"
        ]);



    }
}
