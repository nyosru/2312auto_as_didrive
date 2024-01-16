<?php

namespace App\Livewire\Forms\Ar\Show2;

use App\Models\Ar\ArPayed;
use Livewire\Attributes\Rule;
use Livewire\Form;

class Show2PayedAddForm extends Form
{

    public ?ArPayed $arPayed;

    #[Validate('required')]
    public $date_start = '';
    public $date_end = '';
    public $month = 'no';

    public function rules()
    {
        return [
            'date_start' => [
                'required',
                'date'
//                Rule::unique('posts')->ignore($this->post),
            ],
            'date_end' => 'date',
        ];
    }

    public function update()
    {
        $this->validate();
        $this->arPayed->update($this->all());
        $this->reset();
    }

}
