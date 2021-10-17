<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name','destination_id','status','descripton'];
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
    // public function addData($req){
    //     $data = $req->only('name','category_id','status');
    //     return Destination::create($data);
    // }
}
