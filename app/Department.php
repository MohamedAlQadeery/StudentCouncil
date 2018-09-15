<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    protected $fillable = ['name', 'manager_id'];
    protected $table = "departments";

    /**
     * return the leader of the department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function councilMember()
    {
        return $this->belongsTo('App\CouncilMember');
    }

    /**
     * return the list of activestes for the department
     */
    public function deptActivities()
    {
        return $this->hasMany('App\DepartmentActivity','dep');
    }

    /**
     * return the tasks of the department
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task','department_id');
    }

    /**
     * return the contact info of the department
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfo(){
        return $this->hasOne('App\ContactInformation','department_id');
    }


}