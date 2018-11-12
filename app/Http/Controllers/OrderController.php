<?php

namespace App\Http\Controllers;

use App\Tovar;
use App\Order;
use App\Http\Requests\OrderRequest;
use Auth;

class OrderController extends Controller
{
    public function postIndex(OrderRequest $r){
    	//dd($r->all());
    	$arr = [];
    	$products = [];
	    	foreach($_POST as $key=>$value){
	    		$id=(int)$key;
	    		if($id>0){
	    			$prosducts[$id]=Tovar::find($id);
	    			$arr[$id]=$value;//arr[] key - 1,2,3 (auto increment), value - amount
	    		}
	    	}


    	$body=serialize($arr);
    	$r['body']=$body;// кроме боди добавляем еще значения тк они у меня не nullable() в миграции, а из формфы они не приходят;
    	$r['user_id']=(Auth::guest())?0:Auth::user()->id;//0 - не авторизован, 1 - авторизован;
    	$r['status']='new';
    	$r['payment']='payment';
    	$r['delivery']='delivery';
    	order::create($r->all());

        //очистка корзины после оформления заказа
        foreach ($_COOKIE as $key => $value) {
            $id=(int)$key;
            if($id>0){
                setcookie($id,'',time()-1,'/');
            }
        }

    	return redirect()->back();

    	//dd($body);
    }
}
