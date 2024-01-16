<?php

namespace App\Livewire\Forms\Ar;

use App\Models\Ar\Group as ArGroup;
use Livewire\Attributes\Rule;
use Livewire\Form;

class GroupAddForm extends Form
{

$this->validate();

ArGroup::create(
$this->only(['name', 'address'])
);

return $this->redirect('/')//            ->with('status', 'Group successfully created.')
;

}
