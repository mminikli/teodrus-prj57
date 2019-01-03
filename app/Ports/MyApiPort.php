<?php
/**
 * Created by PhpStorm.
 * User: HISTORYALL
 * Date: 5.11.2018
 * Time: 02:08
 */

namespace App\Ports;

//use SuperV\Modules\Cart\Http\Middleware\AutoLoginDev;
use SuperV\Platform\Domains\Port\Port;

class MyApiPort extends Port
{
    protected $slug = 'my-api';

    protected $prefix = 'my';

    protected $guard = 'superv-api';

    protected $roles = ['client'];

    protected $middlewares = [
        \Barryvdh\Cors\HandleCors::class,
       // AutoLoginDev::class
    ];

    protected $composers = '';

    /**
     * @return mixed
     */
    public function hostname()
    {
        return 'api.'.config('superv.hostname');
    }
}