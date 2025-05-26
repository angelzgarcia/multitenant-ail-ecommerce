<?php

namespace App\View\Components\Tenant\Customer;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomerLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('layouts.tenant.customer');
    }
}
