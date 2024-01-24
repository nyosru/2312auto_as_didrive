<?php

namespace App\Livewire\Didrive\Shop\V1;

use App\Models\Shop\v1\Catalog;
use Livewire\Component;

class OrderItemCats extends Component
{
    public $cat_id;

    public function getListCats($cat_id_start)
    {
        $res = [];
        $res[] = $cat_id_start;

        $ss = Catalog::whereA_id($cat_id_start)->limit(1)->get();
//        if (!empty($ss)) {
        $res[] = $ss->toArray() ?? [];
        if (!empty($ss[0]->a_parentid) && $ss[0]->a_parentid != '00000126') {
            $ss2 = Catalog::whereA_id($ss[0]->a_parentid)->limit(1)->get();
//            if (!empty($ss2)) {
            $res[] = $ss2->toArray() ?? [];
            if (!empty($ss2[0]->a_parentid) && $ss2[0]->a_parentid != '00000126') {
                $ss3 = Catalog::whereA_id($ss2[0]->a_parentid)->limit(1)->get();
//                if (!empty($ss3)) {
                $res[] = $ss3->toArray() ?? [];
                if (!empty($ss3[0]->a_parentid) && $ss3[0]->a_parentid != '00000126') {
                    $ss4 = Catalog::whereA_id($ss3[0]->a_parentid)->limit(1)->get();
//                    if (!empty($ss4)) {
                    $res[] = $ss4->toArray() ?? [];
                    if (!empty($ss4[0]->a_parentid) && $ss4[0]->a_parentid != '00000126') {
                        $ss5 = Catalog::whereA_id($ss4[0]->a_parentid)->limit(1)->get();
//                    if (!empty($ss4)) {
                        $res[] = $ss5->toArray() ?? [];
                    }
                }
            }
        }
//        }
        return $res;
//        return arsort($res);
    }

    public function render()
    {
        $in = [
            'links' => $this->getListCats($this->cat_id)
        ];
//        $in['links'][] = $this->cat_id;
        return view('livewire.didrive.shop.v1.order-item-cats', $in);
    }
}
