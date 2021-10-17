<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Destination extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','status','category_id'];

    public function categories(){
        return $this->hasOne(Category::class,'id','category_id');
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
    public function addData($req){
        $data = $req->only('name','category_id','status');
        return Destination::create($data);
    }
}
