<?php

namespace App\Livewire\Ar;

use App\Models\Ar\ArObject;
use App\Models\Ar\Items;
use App\Models\Ar\Items as ArItems;
use Livewire\Attributes\Validate;
use App\Models\Ar\Group as ArGroup;
use Livewire\Component;
use Livewire\WithPagination;

class Item extends Component
{
    use WithPagination;

    public static $in = [];

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $address = '';

    #[Validate('required')]
    public $group_id = '';

    public function ArItemDelete(int $id)
    {

//        $this->validate();
//        sleep(5);
        ArItems::find($id)->delete();

        return $this->redirect('/item')//            ->with(['ar_group_status' => 'Group successfully created.'])
            ;
    }

    public function ArItemSave()
    {

//        $this->validate();
        sleep(2);
        ArItems::create(
            $this->only(['name', 'address', 'group_id'])
        );

        return $this->redirect('/item') // ->with(['ar_group_status' => 'Group successfully created.'])
            ;
    }

    public static function getData()
    {
//        return Items::all();
        return ArObject::addSelect(['id', 'name', 'address', 'group_id'])->with('group')->orderBy('name')->paginate(100);
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {

        self::$in['items'] = self::getData();
        self::$in['data_groups'] = Group::getData();
        return view('livewire.ar.items', self::$in);
    }

}
