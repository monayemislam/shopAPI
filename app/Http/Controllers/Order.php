<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    //order product
    public function orderDetails()
    {
        $orders = array();

        $orders['order_1'] = array(
            'products'=>array(
                'p_id_one'=>23,//product id will help to print product details when needed to create invoice/report
                'p_id_two'=>45
            ),
            'delivery_person'=>'Zobayer',
            'contact'=>'01723098811',
            'address'=>'Natunhat, Chapainawabganj'
        );
        
        $orders['order_2'] = array(
            'products'=>array(
                'p_id_one'=>83,//product id will help to print product details when needed like invoice/report
                'p_id_two'=>95
            ),
            'delivery_person'=>'Monayem',
            'contact'=>'0171660764',
            'address'=>'Mirpur-10, Dhaka'
        );
        
        return json_encode($orders);
    }
   
}
