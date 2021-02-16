<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Api\LoginUser;
use App\Http\Requests\Api\RegisterUser;
use App\Icon\Transformers\UserTransformer;
use Illuminate\Support\Facades\Validator;


class AuthController extends ApiController
{
    /**
     * AuthController constructor.
     *
     * @param UserTransformer $transformer
     */
    public function __construct(UserTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Login user and return the user if successful.
     *
     * @param LoginUser $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginUser $request)
    {
        $credentials = $request->only('user.email', 'user.password');
        $credentials = $credentials['user'];

        if (! Auth::once($credentials)) {
            return $this->respondFailedLogin();
        }

        return $this->respondWithTransformer(auth()->user());
    }


    public function loginMasuk(Request $request)
    {

        $rules     = [
            'email'         => 'required|string|max:100',
            'password'      => 'required|min:4|max:190',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return  \MessageHelper::unprocessableEntity($validator->messages());
        }

        $myTTL = 10080; //1 week batas expired (per satuan menit)
        // \JWTAuth::factory()->setTTL($myTTL);
        $token = \JWTAuth::attempt($request->only('email', 'password'));

        if($token){       
            return response()->json([
                "code"      =>  200,
                "status"    =>  true,
                "message"   =>  "Success Login",
                "data"      =>  [
                                'token'     => "Bearer ".$token
                            ]
                ],200);
       
        }

        return response()->json([
            "code"      =>  403,
            "status"    =>  false,
            "message"   =>  "Failed Login, User Cannot Login!",
            "data"      =>  null
            ],403);
       
    }

    public function checkUser()
    {
        $auth      = \Illuminate\Support\Facades\Auth::user();

        return response()->json([
            "code"      =>  200,
            "status"    =>  true,
            "message"   =>  "Hai !, ".$auth->email,
            "data"      =>  null
            ],200);
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function logout(Request $request)
    {
        $request['token'] = str_replace('Bearer ', '', $request->header('Authorization'));
        \JWTAuth::invalidate($request->header('Authorization'));

        return response()->json([
            "code"      => 200,
            "status"    =>  true,
            "message"   =>  "Berhasil Logout",
            "data"      =>  null
            ],200);
    }

    /**
     * Register a new user and return the user if successful.
     *
     * @param RegisterUser $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterUser $request)
    {
        $user = User::create([
            'username' => $request->input('user.username'),
            'email' => $request->input('user.email'),
            'password' => $request->input('user.password'),
        ]);

        return $this->respondWithTransformer($user);
    }
}
