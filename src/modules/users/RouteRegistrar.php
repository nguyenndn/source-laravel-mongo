<?php

namespace GSE\Users;

use GSE\Core\RouteRegistrar as CoreRegistrar;

class RouteRegistrar extends CoreRegistrar
{
    /**
     * The namespace implementation.
     */
    protected static $namespace = '\GSE\Users\Http\Controllers';

    /**
     * Register routes for bread.
     *
     * @return void
     */
    public function all()
    {
        $this->router->group(['middleware' => []], function ($router) {
            \Route::get('/users', [
                'uses' => 'UserController@index',
                'as' => 'users.index',
            ]);
        });
    }
}
