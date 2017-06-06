<?php

namespace App\Models\Access\User\Traits\Relationship;

use App\Models\Access\User\SocialLogin;
use App\Models\People\Person;
use App\Models\Stations\Station;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
	public function station()
	{
		return $this->hasOne(Station::class, 'id','station_id');
	}

    public function person()
    {
        return $this->hasOne(Person::class,'id','person_id');
    }

    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(config('access.role'), config('access.role_user_table'), 'user_id', 'role_id');
    }

    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialLogin::class);
    }
}
