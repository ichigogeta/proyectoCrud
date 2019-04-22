<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Version de la aplicación
    |--------------------------------------------------------------------------
    |
    | CSS, JS, o imagenes, añade numero de versión a las rutas.
    | Y así evitar caché del cliente.
    |
    */
    'version' => 1,

    /*
    |--------------------------------------------------------------------------
    | Email del cliente
    |--------------------------------------------------------------------------
    |
    | Avisos, formularío de contacto y otras necesidades.
    |
    */
    'mail_cliente' => env('MAIL_TEST_ACCOUNT', 'cliente@example.com'),

    /*
    |--------------------------------------------------------------------------
    | Email de la aplicación
    |--------------------------------------------------------------------------
    |
    | Dirección email remitente de los emails enviados via PHP
    |
    */
    'app_mail' => 'app@example.com',

    /*
    |--------------------------------------------------------------------------
    | Nombre del email de la aplicación
    |--------------------------------------------------------------------------
    |
    | Aparece como nombre del remitente de los emails enviados via PHP
    |
    */
    'app_mail_name' => 'App Xerintel',

];