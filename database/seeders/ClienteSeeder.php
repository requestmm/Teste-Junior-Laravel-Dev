<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clientes')->insert([
            [
                'nome' => 'Wesley Barbosa',
                'cpf' => '37865865800',
                'data_nascimento' =>'1990-06-06',
                'localidade_id' => 3478,
                'sexo'=> 'M'
            ],
            [
                'nome' => 'Ricardo Menezes',
                'cpf' => '32665265400',
                'data_nascimento' =>'1980-06-06',
                'localidade_id' => 2828,
                'sexo'=> 'M'
            ],
            [
                'nome' => 'Margaret Hamil',
                'cpf' => '23532614812',
                'data_nascimento' =>'1995-06-06',
                'localidade_id' => 5571,
                'sexo'=> 'F'
            ],
            [
                'nome' => 'Joan Clarke',
                'cpf' => '03232467479',
                'data_nascimento' =>'2000-06-06',
                'localidade_id' => 5572,
                'sexo'=> 'M'
            ],

        ]);
    }
}
