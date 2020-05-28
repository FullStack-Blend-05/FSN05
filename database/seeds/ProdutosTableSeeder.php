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
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Tablet Sony', 
            'preco' => 500.00, 
            'categoria_id' => 2
        ]);
    }
}
