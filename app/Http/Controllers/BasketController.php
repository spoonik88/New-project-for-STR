<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;

class BasketController extends Controller
{
   public function getAdd($id=null){
	setcookie($id, 1 , time()+3600, '/');
	return redirect()->back();
}

public function getAll(){
	$arr=[];$product[];
	foeeach($COOKIE as $key=>$value){
		$id=(int)$key;
		if(id>0){
			$arr[$id]=$value;
			product{$id}=Tovar::find($id);
		}
	}
	return view ('backet', compact('arr','products'));
}
public function getDelete($id){
	setcookie($id,'',time()-1,'/');
	return redirect() ->back();
}
}
