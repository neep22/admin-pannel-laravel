<?php

namespace App\Providers;

use App\Models\User\Order;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Use a wildcard * to include the view in all pages
         View::composer('user.layout.MasterApp', function ($view) {


            // Calculate the total order price
            
            $request = App::make('request');
            $ipAddress = $request->ip();

            $totalOrderPrice = Order::select('ipadress', DB::raw('SUM(price) as total_price'))->where('ipadress',$ipAddress)
            ->groupBy('ipadress')
            ->get();

            $totalOrderCount = Order::select('ipadress', DB::raw('COUNT(*) as total_count'))
            ->where('ipadress', $ipAddress)
            ->groupBy('ipadress')
            ->get();

            $order=Order::with('product')->where('ipadress',$ipAddress)->get();

            $view->with('order', $order)->with('totalOrderPrice', $totalOrderPrice)->with('totalOrderCount', $totalOrderCount);

        });
    }
}
