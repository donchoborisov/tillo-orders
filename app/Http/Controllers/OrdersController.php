<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class OrdersController extends Controller
{
    
    
    public function orders() {
   
    
     

   $json = Storage::disk('local')->get('orders.json');
   
   $items = json_decode($json, true);


   //all orders
   $all  = collect($items);

   $allcount = $all->count();

   dump($allcount);



   //counts

   $free = collect($items)->filter(function ($item) { 
    return $item['price'] == '0';
})->count();

   $gbp = collect($items)->filter(function ($item) { 
    return $item['currency'] == 'GBP';
})->count();

$essex = collect($items)->filter(function ($item) { 
    return $item['customer']['billing_address']['county'] == 'Essex';
})->count();



 //sum

$gbp100sum = collect($items)->filter(function ($item) { 
    return $item['currency'] == 'GBP' && $item['price'] >= '100';
})->sum('price');

$gbpsum = collect($items)->filter(function ($item) { 
    return $item['currency'] == 'GBP' && $item['price'];
})->sum('price');

$gbpsumessex = collect($items)->filter(function ($item) { 
    return $item['currency'] == 'GBP' && $item['customer']['billing_address']['county'] == 'Essex';
})->sum('price');




 return view('welcome', compact('free', 'gbp', 'essex', 'gbp100sum', 'gbpsum', 'gbpsumessex'));


}


}
