<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nome' => 'Acre'
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas'
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas'
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá'
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia'
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará'
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal'
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo'
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás'
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão'
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais'
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul'
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso'
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará'
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraiba'
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco'
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí'
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná'
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro'
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte'
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia'
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima'
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul'
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina'
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe'
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo'
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins'
            ),
        ));
    }
}
