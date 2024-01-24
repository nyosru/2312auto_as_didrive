<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;


    /**
     * Имя соединения, которое будет использоваться для данной модели.
     *
     * @var string
     */
    protected $connection = 'mysql_site';


    protected $fillable = [
        'user_id',
        'phone',
        'phone_confirm'
    ];

    public function phoneNumber($data)
    {

        // Получение только цифр из строки
        $numbers = preg_replace("/[^0-9]/", "", $data);

        if ($numbers[0] == 7)
            $numbers[0] = 8;

        if (preg_match("/^(89)\d{9}$/", $numbers)) {
            return substr($numbers, 0, 1)
                . "-" . substr($numbers, 1, 3)
                . "-" . substr($numbers, 4, 3)
                . "-" . substr($numbers, 7, 2)
                . "-" . substr($numbers, 9, 2);

        } else {
            return '-';
        }
    }

}
