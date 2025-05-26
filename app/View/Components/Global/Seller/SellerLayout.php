<?php

namespace App\View\Components\Global\Seller;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SellerLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('layouts.global.seller');
    }
}
