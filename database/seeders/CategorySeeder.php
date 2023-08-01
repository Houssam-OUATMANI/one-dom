<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "name" => 'Comptabilité',
                "value" => 'comptabilite'
            ],
            [
                "name" => 'Création',
                "value" => 'creation'
            ],
            [
                "name" => 'Conseil',
                "value" => 'conseil'
            ],
            [
                "name" => 'Domiciliation',
                "value" => 'domiciliation'
            ],
            [
                "name" => 'Dépôt de capital',
                "value" => 'Depot'
            ],
            [
                "name" => 'Formations',
                "value" => 'formations'
            ],
            [
                "name" => 'Gestion entreprise',
                "value" => 'gestion'
            ],
            [
                "name" => 'Modification',
                "value" => 'modification'
            ],
            [
                "name" => 'Social',
                "value" => 'social'
            ],
            [
                "name" => 'Autres',
                "value" => 'autres'
            ],
        ]);
    }
}
