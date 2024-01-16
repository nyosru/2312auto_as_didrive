<?php

namespace App\Livewire\Phpcat;

use App\Models\PhpcatNews;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{

    use WithPagination;

    // public $data = [];

//
//    public static $ar = 0;
//    public static $ar2 = '';
//
//
//    public function pass()
//    {
//        // Указываем то что нужно записать в файл
////        $text = "Ваш индивидуальный текст";
//
//        // Открываем файл в нужном нам режиме. Нам же, нужно его создать и что то записать.
//        $fp = fopen("file.txt", "a");//поэтому используем режим 'w'
//
//        // записываем данные в открытый файл
//        for ($i1 = 0; $i1 < 10; $i1++) {
//            for ($i2 = 0; $i2 < 10; $i2++) {
//                for ($i3 = 0; $i3 < 10; $i3++) {
//                    for ($i4 = 0; $i4 < 10; $i4++) {
//                        for ($i5 = 0; $i5 < 10; $i5++) {
//                            for ($i6 = 0; $i6 < 10; $i6++) {
//                                for ($i7 = 0; $i7 < 10; $i7++) {
//                                    for ($i8 = 0; $i8 < 10; $i8++) {
//                                        $this->ee($fp, $i1 . $i2 . $i3 . $i4 . $i5 . $i6 . $i7 . $i8);
//                                    }
//                                }
//                            }
//                        }
//                    }
//                }
//            }
//        }
//
//
//        //не забываем закрыть файл, это ВАЖНО
//        fclose($fp);
//    }
//
//
//    function ee($fp, $string)
//    {
//
//        self::$ar++;
//        self::$ar2 .= $string . PHP_EOL;
//
//        if (self::$ar == 500) {
//            fwrite($fp, self::$ar2);
//            self::$ar = 0;
//            self::$ar2 = '';
//        }
//
//    }


    public function render()
    {
        return view('livewire.phpcat.news', [
            // 'data' => PhpcatNews::all()
            'items' => PhpcatNews::paginate(5)
        ]);
    }
}
