<?php
namespace App\Http\Controllers\Api\Auth; 
use Illuminate\Http\Request; 
//use App\Http\Controllers\Controller; 
   use App\Entities\User; 

use Illuminate\Support\Facades\Auth; 
use Illuminate\Auth\Events\Registered;   
use Validator;
use App\Http\Controllers\Api\BaseController as BaseController;


class AuthController extends BaseController
{


    public function register(Request $request)
    { 

        $this->validator($request); 

          return      $this->sendResponse($this->make($request), 'User register successfully.');
    }
    public function getUser() {
    $user = Auth::user();
    return response()->json(['success' => $user], $this->successStatus); 
    }

    public function updateUser(Request $request )
    {
       
/*
        return ($request->id>0 && !empty($request->email) && !empty($request->password))?
        $this->sendResponse($this->make($request,$user), 'User update successfully.')
     :  $this->sendError('Unauthorised.', ['error'=>'User update ']) ;*/
            
           // $user = Auth::guard('api')->user();  
            $user = User::findOrFail($request->id);
            $user->update($request->all());
            $user = User::findOrFail($request->id);
    
          

            return response()->json($user, 200);
    }

    public function getAllUser() {
        return User::all();
        }

    public function userDetail()
    {
        return response()->json(['user' => ((Auth::guard('api')->check())?Auth::guard('api')->user():null)], 200);
    }

    public function login(Request $request)
    {
               return (Auth::attempt(['email' => $request->email, 'password' => $request->password]))?
               $this->sendResponse($this->make($request,'get'), 'User login successfully.')
            :  $this->sendError('Unauthorised.', ['error'=>'Unauthorised']) ;
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('api')->user();
    
        if ($user) {
            $user->remember_token = null;
            $user->save();
        }
    
        return response()->json(['data' => 'User logged out.'], 200);
    }



    protected function validator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
    }

    protected function make(Request $request,$opt='create')
    {

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = ($opt=='create')?User::create($input):Auth::user();
        $success['token'] =  $this->registered($request);
        $success['user'] =  $user;
        return  $success;
    }
    protected function registered(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $token=  $user->createToken('LagesApi')-> accessToken;  
            return  $user->generateToken( $token);
        } 
       
 
    }






























      /*public function registers(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LagesApi')->accessToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }

 
     public function logind(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('LagesApi')-> accessToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }*/
} 