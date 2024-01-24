<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;


    /**
     * Имя соединения, которое будет использоваться для данной модели.
     *
     * @var string
     */
    protected $connection = 'mysql_site';

       /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'mod_banner_up';
}
