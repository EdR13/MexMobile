<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //iPhone 13 Pro Max
        DB::table('images')->insert(['image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=940&hei=1112&fmt=png-alpha&.v=1645552346295',]);
        
        //iPhone 12 Pro Max
        DB::table('images')->insert(['image' => 'https://delightvillage.com/wp-content/uploads/2021/03/iphone12-max.png',]);
        DB::table('images')->insert(['image' => 'https://aireshopping.com/wp-content/uploads/2021/10/iphone-12-pro-max-graphite-hero.png',]);
        
        //iPhone 11 Pro Max
        DB::table('images')->insert(['image' => 'https://clickboxgo.b-cdn.net/wp-content/uploads/2021/06/refurb-iphone-11-pro-max-silver-2019.png',]);
        DB::table('images')->insert(['image' => 'https://assets.swappie.com/cdn-cgi/image/width=600,height=600,fit=contain,format=auto/swappie-iphone-11-pro-max-silver-back.png',]);        
        
        //Galaxy A53 5G
        DB::table('images')->insert(['image' => 'https://cbff-teco-strapi-cms-pro.s3.amazonaws.com/SG_A53_Blanco_R30_min_36a44e6999.png',]);
        DB::table('images')->insert(['image' => 'https://images.samsung.com/is/image/samsung/p6pim/mx/2202/gallery/mx-galaxy-a53-5g-a536-sm-a536ezweltm-531546006?$650_519_PNG$',]);
        
        //Galaxy S22
        DB::table('images')->insert(['image' => 'https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/samsung/Samsung-Galaxy-S22-Plus/Green/Samsung-Galaxy-S22-Plus-Green-backimage.png',]);
        DB::table('images')->insert(['image' => 'https://www.opiniones123.es/wp-content/uploads/2022/02/fee_786_587_png_aef2048a-5bc0-48dd-9986-e2e3d92316d3_grande.png',]);
        DB::table('images')->insert(['image' => 'https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/samsung/Samsung-Galaxy-S22-Plus/Green/Samsung-Galaxy-S22-Plus-Green-leftimage.png',]);
        
        //One Plus 10 Pro 5G
        DB::table('images')->insert(['image' => 'https://oasis.opstatics.com/content/dam/oasis/page/2022/operation/mar/0317/EU-IN_Green.png',]);
        DB::table('images')->insert(['image' => 'https://www.techrx.in/wp-content/uploads/2022/03/oneplus_10_pro_renders_ol__1_-removebg-preview.png',]);
    }
}
