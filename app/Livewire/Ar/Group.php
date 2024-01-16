<?php

namespace App\Livewire\Ar;

use Livewire\Attributes\Validate;
use App\Models\Ar\Group as ArGroup;
use Livewire\Component;
use Livewire\WithPagination;

class Group extends Component
{
    use WithPagination;

    public static $in = [];

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $address = '';

    public function ArGroupItemDelete( int $id )
    {

//        $this->validate();
//        sleep(5);
        ArGroup::find($id)->delete();

        return $this->redirect('/group')
//            ->with(['ar_group_status' => 'Group successfully created.'])
            ;
    }

    public function ArGroupSave()
    {

//        $this->validate();
        sleep(5);
        ArGroup::create(
            $this->only(['name', 'address'])
        );

        return $this->redirect('/')
//            ->with(['ar_group_status' => 'Group successfully created.'])
            ;
    }

    public static function getData()
    {
        return ArGroup::addSelect(['id', 'name', 'address'])->orderBy('name')->paginate(10);
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {
        self::$in['groups'] = self::getData();
        return view('livewire.ar.group', self::$in);
    }

}
