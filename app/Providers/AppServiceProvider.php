<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    public function boot(): void
    {
        Validator::extend('email_or_phone', function ($attribute, $value, $parameters, $validator) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                // If the value is a valid email address, apply email validation rules
                return true;
            } else {
                // If the value is not a valid email address, assume it's a phone number and apply phone validation rules
                return preg_match('/^\d{10,12}$/', $value); // Validate phone number format
            }
        });
    }
}
