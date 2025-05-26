<?php

namespace App\View\Components\Global\Support;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SupportLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('layouts.global.support');
    }
}
