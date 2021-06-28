<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Product extends Controller
{
    //store product 
    public function storeProduct(Request $req)
    {
        $data=[
            'product_id'=>$req->product_id,
            'product_name'=>$req->product_name,
            'weight'=>$req->weight,
            'stock_amount'=>$req->stock_amount,
            'unit'=>$req->unit,
            'price'=>$req->price,
            'discount_id'=>$req->discount_id
        ];
        if(isset($data))
        {
            return ["notification"=>"Data stored successfully"];
        }
        else
        {
            return ["notification"=>"Something went wrong!"]; 
        }
        
    }
}
