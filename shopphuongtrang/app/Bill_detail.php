<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = "bill_detail";

    public function product(){
        return $this->belongsTo('App\Product', 'id_product', 'id');
    }

    public function bills(){
        return $this->belongsTo('App\Bill', 'id_ill', 'id');
    }
}
