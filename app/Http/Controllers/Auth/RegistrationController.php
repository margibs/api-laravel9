<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreUserRequest;
use App\Services\UserService;
use App\Http\Resources\UserResource;
use App\Notifications\WelcomeEmailNotification;

class RegistrationController extends Controller
{
    public function store(StoreUserRequest $request, UserService $userService)
    {
        $user = $userService->store($request->validated());

        // Can call notifiy on controller
        // $user->notify(new WelcomeEmailNotification());
        return new UserResource($user);
    }

}
