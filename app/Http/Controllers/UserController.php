<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    public function index(){}

    public function create(){}

    public function store(UserStoreRequest $request){
        try{
            User::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]
            );

            return response()->json([
                'message' => 'User successfully created'
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e
            ], 500);
        }
    }

    public function edit(string $id){}

    public function update(string $id){}

    public function destroy(string $id){}
}
