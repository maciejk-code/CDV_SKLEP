<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('product.show_multiple', function ($view){
           $view->with('products', $this->getProducts());
        });
    }

    public function getProducts(): array
    {
//        $result = DB::table('accessories')
//            -> join ('hoodies')
//            -> join ('shirts')
//            -> join ('sneakers')
//            -> join ('trousers')
        $accessories = DB::table('accessories')->get();
        $hoodies = DB::table('hoodies')->get();
        $shirts = DB::table('shirts')->get();

        return $result = [
            'shirts'=> $shirts,
            'hoodies' => $hoodies,
            'accessories' => $accessories
        ];
    }
}
