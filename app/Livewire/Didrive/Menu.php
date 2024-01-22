<?php

namespace App\Livewire\Didrive;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Menu extends Component
{

    public $menu0 = [
        ['route' => 'didrive.index', 'name' => 'Главная'],
//        ['route' => 'ar.group', 'name' => 'Группы'],
//        ['route' => 'ar.item', 'name' => 'Обьекты'],
//        ['route' => 'ar.pays', 'name' => 'Платежи'],
//        ['route' => 'ar.tenant', 'name' => 'Арендаторы'],
//        ['route' => 'ar.list1', 'name' => 'вид1'],
//        ['route' => 'ar.show2', 'name' => 'вид2'],
    ];


    public function render()
    {
        $in = ['menu' => []];
        foreach ($this->menu0 as $m) {
            if (Route::has($m['route']))
                $in['menu'][] = $m;
        }
        return view('livewire.didrive.menu', $in);
    }
}
