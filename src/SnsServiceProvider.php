<?php

namespace NotificationChannels\Sns;


use Aws\Laravel\AwsServiceProvider;
use Aws\Sns\SnsClient;
use Illuminate\Support\ServiceProvider;


class SnsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot ()
    {
        $this->app->when ( SnsChannel::class )
                  ->needs ( SnsClient::class )
                  ->give ( function () {
                      return $this->app->make ( 'aws' )->createClient ( 'sns' );
                  } );
    }


    /**
     * Register the application services.
     */
    public function register ()
    {
        $this->app->register ( AwsServiceProvider::class );
    }
}
