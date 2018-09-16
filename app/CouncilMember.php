<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouncilMember extends Model
{
    //
    protected $fillable=['name','image'];
    protected $table='council_members';


    /**
     * return the department of the member
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department(){
        return $this->hasOne('App\Department','manager_id','id');
    }



}
