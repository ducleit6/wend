<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $fillable = [	'name',	'price',	'sale_price',	'image',	'description',	'date',	'start_day',	'max_member',	'min_member',	'destination_id',	'status'			];
    public function destinations(){
        return $this->hasOne(Destination::class,'id','destination_id');
    }
    public function scopeSearchFilter($query)
    {
        if(request()->key){
            $query = $query->where('name','like','%'.request()->key.'%');
        }
        if(request()->order)
        {
            $order = explode('-',request()->order);
            $orderBy = isset($order[0]) ? $order[0] : 'id';
            $orderValue = isset($order[1]) ? $order[1] : 'DESC';
            $query  = $query -> orderBy($orderBy,$orderValue);
        }
        if(request()->status != ''){
            $query = $query->where('status',request()->status);
            if(request()->status == 2){
                $query = $query->where('status',0);
            }

        }
        return $query;
    }
    public function getDataIndex($i = 10){
        return $this->searchFilter()->paginate($i);
    }
    public function getDataTrashed($i = 10){
        return $this->onlyTrashed()->searchFilter()->paginate($i);
    }
}
