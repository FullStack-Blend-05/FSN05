<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Notebook'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Tablet'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Celular'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Fone'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Camera'
        ]);
    }
}
