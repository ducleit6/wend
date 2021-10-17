<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admins';
    protected $fillable = ['name','image','email','phone','password','remember_token','verity','status','deleted_at'];

    //local scope
    public function scopeSearchFilter($query,$req )
    {
        if($req -> key ){
            $query = $query->where('name','like','%'.$req->key.'%');
        }
        if($req -> order){
            $order = explode('-',$req->order);
            $orderBy = isset($order[0]) ? $order[0] : 'name';
            $orderName = isset($order[1]) ? $order[1] : 'ASC';
            $query = $query->orderBy($orderBy,$orderName);
        }
        return $query;
    }
}
