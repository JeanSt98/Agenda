<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
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
    public function boot(): void
    {
        Validator::extend('cedula', function ($attribute, $value, $parameters, $validator) {
            // Verificar que la cédula tenga 10 dígitos
            if (strlen($value) != 10) {
                return false;
            }
        
            // Verificar que los primeros dos dígitos sean válidos
            $provincia = substr($value, 0, 2);
            if ($provincia < 1 || $provincia > 24) {
                return false;
            }
        
            // Verificar el último dígito (dígito verificador)
            $digitoVerificador = substr($value, -1);
            $coeficientes = array(2, 1, 2, 1, 2, 1, 2, 1, 2);
            $suma = 0;
        
            for ($i = 0; $i < 9; $i++) {
                $producto = $coeficientes[$i] * $value[$i];
                $suma += ($producto >= 10) ? $producto - 9 : $producto;
            }
        
            $digitoCalculado = ($suma % 10 != 0) ? 10 - ($suma % 10) : 0;
        
            if ($digitoVerificador != $digitoCalculado) {
                return false;
            }
        
            return true;
        });
    }
}
