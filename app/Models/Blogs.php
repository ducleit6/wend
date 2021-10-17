<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','content', 'image','status'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
    public function scopeSearchFilter($query){
        if (request()->key) {
            $query = $query->where('name','like','%'.request()->key.'%');
        }
        if (request()->order) {
            $order = explode('-',request()->order);
            $orderBy = isset($order[0]) ? $order[0]: 'id';
            $orderValue = isset($order[1]) ? $order[1]: 'ASC';
            if ($order[0] != 'status') {
                $query = $query->orderBy($orderBy,$orderValue);
            }
            
            if ($order[0] == 'status') {
                $query = $query->where($orderBy,$orderValue);
            }
        }
        return $query;
    }

    public function add($form_data) {
        return $this->create($form_data);
    }

    public function scopeView(){
       return $this->paginate(5);
    }
    
    public function editFind($id) {
        return $this->find($id);
    }

    public function edit($id) {
        return $this->update($id);
    }
}