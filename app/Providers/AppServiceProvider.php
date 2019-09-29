<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\BasicSetting;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        View::composer('front.layouts.main',function($view){
            $all_categorys = Category::Where('status',0)->get();
           $view->with('all_categorys',$all_categorys);
       });

         View::composer('front.layouts.main',function($view){
            $sub_categorys = DB::table('sub_categories')
                                ->join('posts','sub_categories.id','=','posts.sub_category_id')
                                 ->where('sub_categories.status',0)
                                ->select('sub_categories.*')
                                ->distinct()->get(['posts.sub_category_id']);
                                
           $view->with('sub_categorys',$sub_categorys);
       });

          View::composer('front.layouts.main',function($view){
            $sub_sub_categorys = DB::table('sub_sub_categories')
                                ->join('posts','sub_sub_categories.id','=','posts.sub_sub_category_id')
                                 ->where('sub_sub_categories.status',0)
                                ->select('sub_sub_categories.*')
                               ->distinct()->get(['posts.sub_sub_category_id']);
           $view->with('sub_sub_categorys',$sub_sub_categorys);
       });


           View::composer('front.layouts.main',function($view){
            $basicSetting = BasicSetting::first();
           $view->with('basicSetting',$basicSetting);
       });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
