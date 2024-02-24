<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function foodBeverage()
    {
        $activeNavItem = 'food_beverage';
        return view('products.food_beverage', compact('activeNavItem'));
    }

    public function beautyHealth()
    {
        $activeNavItem = 'beauty_health';
        return view('products.beauty_health', compact('activeNavItem'));
    }

    public function homeCare()
    {
        $activeNavItem = 'home_care';
        return view('products.home_care', compact('activeNavItem'));
    }

    public function babyKid()
    {
        $activeNavItem = 'baby_kid';
        return view('products.baby_kid', compact('activeNavItem'));
    }
}
