<?php

namespace GSE\Users\Repositories\Eloquent;

use GSE\Users\Models\User;
use GSE\Users\Repositories\Contracts\UserRepository;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Get user
     * @param  array  $attributes attributes from request
     * @return object
     */
    public function getUsers(array $attributes)
    {
        if (!empty($attributes['limit'])) {
            $user = $this->paginate($attributes['limit']);
        } else {
            $user = $this->get();
        }

        return $user;
    }
}
