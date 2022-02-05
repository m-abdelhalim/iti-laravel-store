<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = ['Phones', 'Watches', 'Sport Wear', 'Others'];
        $products = [
            [
                'id'=>1, 
                'name'=>'product 1',
                'price'=>100
            ],
            [
                'id'=>2, 
                'name'=>'product 2',
                'price'=>200
            ],
            [
                'id'=>3, 
                'name'=>'product 3',
                'price'=>300
            ],
            [
                'id'=>4, 
                'name'=>'product 4',
                'price'=>400
            ],
            [
                'id'=>5, 
                'name'=>'product 5',
                'price'=>100
            ],
            [
                'id'=>6, 
                'name'=>'product 6',
                'price'=>200
            ],
            [
                'id'=>7, 
                'name'=>'product 7',
                'price'=>300
            ],
            [
                'id'=>8, 
                'name'=>'product 8',
                'price'=>400
            ],
            [
                'id'=>9, 
                'name'=>'product 9',
                'price'=>100
            ],
            [
                'id'=>10, 
                'name'=>'product 10',
                'price'=>200
            ],
            [
                'id'=>11, 
                'name'=>'product 11',
                'price'=>300
            ],
            [
                'id'=>12, 
                'name'=>'product 12',
                'price'=>400
            ],
            
                
            ];
        return view('home', ['categories' => $categories, 'products' => $products]);
    }
    
    
}
