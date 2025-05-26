<?php

namespace App\View\Components\Tenant\Warehouse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WarehouseLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('layouts.tenant.warehouse');
    }
}
