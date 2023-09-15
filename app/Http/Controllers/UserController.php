<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function show($userId){
        
        $user=User::find($userId);
                if (!empty($user))
                {
                    return $user;
                }
                else
                {
                    return response()->json([
                        "message"=> "User not found"
                    ], 404);
                }
            }
}
