<?php namespace App\Providers;

use App\Listeners\Observers\MultiTenant;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(MultiTenant::class);
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->registerApplicationDomain();
    }

    /**
     * Register application domain URL.
     *
     * @return void
     */
    protected function registerApplicationDomain()
    {
        $domain = str_replace(['http://', 'https://', '//'], '', env('APP_URL'));

        set_meta('app::url', $domain);
        set_meta('tenant::domain', '{tenant}.'.$domain);

        config([
            'session.domain' => ".{$domain}",
        ]);
    }
}
