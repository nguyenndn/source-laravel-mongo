<?php

namespace GSE\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use GSE\Users\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * @var $userRepository
     */
    protected $userRepository;
    
    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->getUsers($request->all());

        return view('welcome', compact('users'));
    }
}
