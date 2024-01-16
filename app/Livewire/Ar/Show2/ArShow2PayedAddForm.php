<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\ArPayed;
use Livewire\Component;

class ArShow2PayedAddForm extends Component
{

    public ?ArPayed $arPayed;

    #[Validate('required')]
    public $date_start = '';
    public $date_end = '';
    public $month = 'no';

    public $ar_tenant_id;
    public $ar_object_id;

    public $form_show = false;

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

    public function showHide()
    {
        $this->form_show = !$this->form_show;
    }

    public function save()
    {

        // если оплата 1 месяц
        if ($this->month == 'yes') {
            $this->date_end = date('Y-m-d', strtotime($this->date_start . ' +1 month -1 day'));
        }

        $this->validate();

        ArPayed::create(
            $this->only(['ar_tenant_id', 'ar_object_id', 'date_start', 'date_end'])
        );

        return $this->redirect(route('ar.show2'));
    }

    public function render()
    {
        return view('livewire.ar.show2.ar-show2-payed-add-form');
    }
}
