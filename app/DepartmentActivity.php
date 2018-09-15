<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentActivity extends Model
{
    //
    protected $table='departments_activities';
    protected $fillable = ['department_id','name','image','body'];

    /**
     * return the department of the activity
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(){
        return $this->belongsTo('App\Department');
    }


}
