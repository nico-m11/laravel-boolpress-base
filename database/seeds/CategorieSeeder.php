<?php

use Illuminate\Database\Seeder;
use App\CategorieModel;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CategorieModel::class, 100)->create()->each(function ($el_categorie){
            $el_categorie->save();
        });
    }
}
