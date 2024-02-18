<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */



    // public function boot(): void
    // {
    //     View::composer('*', function ($view) {
    //         $unreadCount = Contact::where('read', false)->count();
    //         $view->with('unreadCount', $unreadCount);
    //     });
    // }


 
        public function boot(): void
        {
            View::composer('*', function ($view) {
                $unreadMessages = Contact::where('read', false)->get();
                $unreadCount = $unreadMessages->count();
                $view->with('unreadMessages', $unreadMessages);
                $view->with('unreadCount', $unreadCount);
            });
        }





}
