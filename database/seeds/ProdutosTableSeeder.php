<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Macbook', 
            'preco' => 200.00, 
            'categoria_id' => 1,
            'img' => '/img/product01.png'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Tablet Sony', 
            'preco' => 500.00, 
            'categoria_id' => 2,
            'img' => '/img/product04.png'
        ]);
    }
}
