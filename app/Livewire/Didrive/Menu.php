<?php

namespace App\Livewire\Didrive;

use Livewire\Component;

class Menu extends Component
{

    public $menu = [
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
        return view('livewire.didrive.menu');
    }
}
