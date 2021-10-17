<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rantings extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','tour_id','services','hospitality','room','comfort','satisfasion','cleanliness','comment'];

    public function users(){
        return $this->hasMany(Users::class, 'user_id', 'id');
    }

    public function tuors(){
        return $this->hasMany(Tuors::class, 'tour_id', 'id');
    }

    public function Where($where = '',$data) {
        return $this->where($where,$data);
    }

    public function add($form_data) {
        return $this->create($form_data);
    }

    public function Find() {
        return $this->find();
    }

    public function edit($data) {
        return $this->update($data);
    }
}
