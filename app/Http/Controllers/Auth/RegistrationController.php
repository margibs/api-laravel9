<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Services\UserService;

class RegistrationController extends Controller
{
    public function store(StoreUserRequest $request, UserService $userService)
    {
        $user = $userService->store($request->validated());

        return $user;
    }

}
