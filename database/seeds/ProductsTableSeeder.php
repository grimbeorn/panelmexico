<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories
        // factory(Product::class, 10)->create();
        Product::create([
            'use'=>'cubierta',
			'name'=>'master-C 30',
			'description'=>'Panel para Cubierta de 30mm de espesor.',
			'long_description'=>'Panel para cubierta de 30mm de espesor, calibre 28/28, blanco pirineo, 2 grecas, PUR.',
			'thickness'=>'30',
			'm2PerContainer'=>'1119',
			'cipCost'=>'329',
			'indirectCost'=>'40',
			'profit'=>'0.35'
            ]);
    }
}
