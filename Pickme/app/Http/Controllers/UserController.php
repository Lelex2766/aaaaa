<?php

namespace App\Http\Controllers; //add \API ?

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $successStatus = 200;

    // Registration API
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            "c_password" => 'required|same:password',
        ]);
        if($validator->fails())
        {
            return response()->json (['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp') -> accessToken;
        $success['name'] = $user->name;
        return response()->json(['success'=>$success]);
    }

    // Login API
    public function login()
    {
        if(Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
            ]))
            {
                $user = Auth::user();
                $success['token'] = $user->createToken('MyApp')->accessToken; // ici bien MyApp ou autre chose ?
                return response()->json(['success' => $success], $this-> successStatus);
            }
            else {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
    }
    
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return $users;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }
}
