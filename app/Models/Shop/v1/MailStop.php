<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailStop extends Model
{
    use HasFactory;

    /**
     * Имя соединения, которое будет использоваться для данной модели.
     *
     * @var string
     */
    protected $connection = 'mysql_site';

}
