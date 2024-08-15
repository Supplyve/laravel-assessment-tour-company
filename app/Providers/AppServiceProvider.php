<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;            
        });

        Blade::directive('readableDateTime', function ($datetime) {
            return "<?php echo date_format($datetime, 'd M Y'); ?>";
        });

        Blade::directive('moneyFormat', function ($money) {
            return "$<?php echo $money; ?>";
        });

        
    }
}
