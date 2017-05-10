<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable=['nome'];


    public function users(){
    	return $this->hasMany(User::class,'department_id','id');
    }

    public function getDepartments(int $department_id){
    	
    }
}
