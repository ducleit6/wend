<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryFAQs extends Model
{
    use HasFactory;
    protected $table = 'category_faqs';
    protected $fillable = ['name','status'];

    public function products(){
        return $this->hasMany(FAQs::class, 'catfaqs_id', 'id');
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
       return $this->paginate(5);
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
