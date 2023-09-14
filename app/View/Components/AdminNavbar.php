<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminNavbar extends Component
{
    public $index;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        //
        $this->index = $data;
        // $x = ['ADD EMPLOYEE', 'EMPLOYEE LIST', 'ADD INVENTORY', 'INVNETORY LIST', 'ASSIGN INVENTORY'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $x = [['name' => 'ADD EMPLOYEE', 'href' => 'adminui'], ['name' => 'EMPLOYEE LIST', 'href' => 'adminui_employee_list'], ['name' => 'ADD INVENTORY', 'href' => 'adminui_add_inventory'], ['name' => 'INVENTORY LIST', 'href' => 'adminui_inventory_list'], ['name' => 'LOGOUT', 'href' => 'logout']];
        return view('components.admin-navbar', ['data' => $x, 'index' => $this->index]);
    }
}
