<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FAQs extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $fillable = ['name', 'catfaqs_id','content','status'];

    public function cat(){
        return $this->hasOne(CategoryFAQs::class, 'id', 'catfaqs_id');
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

    public function scopeView(){
       return $this->get();
    }

    public function add($form_data) {
        return $this->create($form_data);
    }

    public function editFind($id) {
        return $this->find($id);
    }

    public function edit($id) {
        return $this->update($id);
    }
}
