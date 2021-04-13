<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('product_name')->nullable();
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable(); 
            $table->string('shop_id')->nullable()->default('1');

            $table->string('buying_price')->nullable(); 
            $table->string('selling_price')->nullable();
            $table->string('discount')->nullable()->default('0');  
            $table->string('u_discount')->nullable()->default('0'); 
            $table->string('present_price')->nullable();  
            $table->string('u_present_price')->nullable(); 

            $table->string('get_cashback')->nullable()->default('0'); 
            $table->string('use_cashback')->nullable()->default('0');   

            $table->string('image_one')->nullable();  
            $table->string('image_two')->nullable(); 
            $table->string('image_three')->nullable();  
            $table->string('image_four')->nullable();

            $table->integer('product_color')->nullable();
            $table->integer('product_size')->nullable();  

            $table->integer('red')->nullable()->default(0); 
            $table->integer('green')->nullable()->default(0);  
            $table->integer('blue')->nullable()->default(0);  
            $table->integer('yellow')->nullable()->default(0);  
            $table->integer('black')->nullable()->default(0);  
            $table->integer('white')->nullable()->default(0);  
            $table->integer('gray')->nullable()->default(0);  
            $table->integer('silver')->nullable()->default(0);  
            $table->integer('maroon')->nullable()->default(0);  
            $table->integer('purple')->nullable()->default(0);  
            $table->integer('pink')->nullable()->default(0); 
            $table->integer('olive')->nullable()->default(0);  
            $table->integer('navy')->nullable()->default(0);  
            $table->integer('lime')->nullable()->default(0);  

            $table->integer('s')->nullable()->default(0);  
            $table->integer('m')->nullable()->default(0);  
            $table->integer('l')->nullable()->default(0);  
            $table->integer('xl')->nullable()->default(0);  
            $table->integer('xxl')->nullable()->default(0); 

            $table->integer('red_quantity')->nullable()->default(0); 
            $table->integer('green_quantity')->nullable()->default(0);  
            $table->integer('blue_quantity')->nullable()->default(0);  
            $table->integer('yellow_quantity')->nullable()->default(0);  
            $table->integer('black_quantity')->nullable()->default(0);  
            $table->integer('white_quantity')->nullable()->default(0);  
            $table->integer('gray_quantity')->nullable()->default(0);  
            $table->integer('silver_quantity')->nullable()->default(0);  
            $table->integer('maroon_quantity')->nullable()->default(0);  
            $table->integer('purple_quantity')->nullable()->default(0);  
            $table->integer('pink_quantity')->nullable()->default(0); 
            $table->integer('olive_quantity')->nullable()->default(0);  
            $table->integer('navy_quantity')->nullable()->default(0);  
            $table->integer('lime_quantity')->nullable()->default(0); 
            
            $table->integer('product_quantity')->nullable();  

            $table->string('product_code')->nullable();
            $table->string('product_rating')->nullable()->default('0');  
            $table->text('product_description')->nullable(); 

            
            
            $table->string('max_buy_quantity')->nullable()->default('0');  
            $table->string('pay_method')->nullable()->default('0');  
            $table->string('delivery_charge')->nullable()->default('0');  
            $table->string('delivery_time')->nullable()->default('90');  
            $table->string('warranty')->nullable();
            
            $table->string('keep_note')->nullable(); 
            

            $table->string('show_home')->nullable()->default('0');            
            $table->string('show_warranty')->nullable()->default('0');        
            $table->string('show_note')->nullable()->default('0');             
            
            $table->string('isUradhura')->nullable()->default('0'); 
            $table->string('isHotDeals')->nullable()->default('0'); 

            $table->string('status')->nullable()->default('active');  
            $table->string('date')->nullable();
            $table->string('time')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
