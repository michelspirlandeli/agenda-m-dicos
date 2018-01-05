<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use Image;

class PerfilController extends Controller
{
    public function perfil(){
      return view('perfil', 
      array('user' => Auth::user()) ); 
    } 

    public function update_avatar(Request $request){ 
	     if($request->hasFile('avatar')){ 
	     	$avatar = $request->file('avatar'); 
	     	$filename = time() . '.' . $avatar->getClientOriginalExtension(); 
	     	Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) ); 
	     	$user = Auth::user(); $user->avatar = $filename; $user->save(); 
	     } 
	     return view('perfil', array('user' => Auth::user()) ); 
     } 
}
