<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RoomSideComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeRoomSide();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public function composeRoomSide() {
        view()->composer('backend.layouts.master.master', 'App\Http\ViewComposers\RoomSideComposer');
    }
}
