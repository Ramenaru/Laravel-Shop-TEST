<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrator',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'role'=>'admin'
        ]);

        category::create([
            'name'=>'Shirt'
        ]);
        category::create([
            'name'=>'Shoes'
        ]);
        category::create([
            'name'=>'Accessories'
        ]);

        //SHIRT
        product::create([
            'category_id'=>'1',
            'name'=>'UNIQLO Kaws',
            'price'=>'29',
            'photo'=>'img/shirt1.png',
            'color'=>'Peach'
        ]);
        product::create([
            'category_id'=>'1',
            'name'=>'PHUTURE Polo',
            'price'=>'40',
            'photo'=>'img/shirt2.png',
            'color'=>'Red'
        ]);
        product::create([
            'category_id'=>'1',
            'name'=>'Lacoste Polo',
            'price'=>'75',
            'photo'=>'img/shirt3.png',
            'color'=>'Green'
        ]);
        product::create([
            'category_id'=>'1',
            'name'=>'ALMOST Vacation',
            'price'=>'30',
            'photo'=>'img/shirt4.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'1',
            'name'=>'Under Armour Sports',
            'price'=>'40',
            'photo'=>'img/shirt5.png',
            'color'=>'Gray'
        ]);

        //Shoes
        product::create([
            'category_id'=>'2',
            'name'=>'Nike Air',
            'price'=>'130',
            'photo'=>'img/shoes1.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'2',
            'name'=>'Adidas Sports',
            'price'=>'120',
            'photo'=>'img/shoes2.png',
            'color'=>'Maroon'
        ]);
        product::create([
            'category_id'=>'2',
            'name'=>'Nike Air Jordan',
            'price'=>'190',
            'photo'=>'img/shoes3.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'2',
            'name'=>'Adidas Original',
            'price'=>'150',
            'photo'=>'img/shoes4.png',
            'color'=>'White'
        ]);
        product::create([
            'category_id'=>'2',
            'name'=>'New Balance Sports',
            'price'=>'160',
            'photo'=>'img/shoes5.png',
            'color'=>'Red | Blue'
        ]);

        //ACC
        product::create([
            'category_id'=>'3',
            'name'=>'Apple Watch',
            'price'=>'399',
            'photo'=>'img/acc1.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'3',
            'name'=>'Under Armour Headband',
            'price'=>'16',
            'photo'=>'img/acc2.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'3',
            'name'=>'Bruno Capelo Fedora',
            'price'=>'50',
            'photo'=>'img/acc3.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'3',
            'name'=>'Skybags Backpack',
            'price'=>'175',
            'photo'=>'img/acc4.png',
            'color'=>'Black'
        ]);
        product::create([
            'category_id'=>'3',
            'name'=>'Prada Caps',
            'price'=>'35',
            'photo'=>'img/acc5.png',
            'color'=>'Black'
        ]);
    }
}
