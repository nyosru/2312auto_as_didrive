<?php

namespace App\Models\Didrive\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Имя соединения, которое будет использоваться для данной модели.
     *
     * @var string
     */
    protected $connection = 'mysql_site';

//    public function comments(){
//        return $this->hasMany(Comment::class);
//    }

}
