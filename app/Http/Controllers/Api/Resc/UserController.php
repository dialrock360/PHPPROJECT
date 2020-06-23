<?php

namespace App\Http\Controllers\Api\Resc; 
   use App\Entities\User;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   use Symfony\Component\HttpFoundation\Response;
   use App\Http\Controllers\Api\BaseController as BaseController;
   
   class UserController extends BaseController
   {   
        public function liste()
        {
           // return User::all();
           return   User::all('id', 'name', 'email')->sortBy("name");
        }

        public function show(User $user)
        {
            return $user;
        }

        public function get($id)
        {
            return User::findOrFail($id);
        }

        public function add(Request $request)
        {
             $user = new User;
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password =  bcrypt('password'); 
          $user = User::create($request->all());

            return response()->json(  $user , 201);
        }

       
        public function update(Request $request)
        {
            $user = User::findOrFail($request->id);
             $user->update($request->all());
    
            return $user;
        }

     
        public function delete($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
    
            return 204;
        }
   
      
   }
   
   