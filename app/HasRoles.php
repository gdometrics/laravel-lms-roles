<?php

namespace App;

trait HasRoles
{
	public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function actAs($role)
    {
        return $this->roles()->save( Role::whereName($role)->firstOrFail() );
    }

    public function hasRole($role)
    {
        if(is_string($role))
        {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();

        // foreach ($role as $r) 
        // {
        //     if($this->hasRole($r->name)
        //     {
        //         return true;
        //     });
        // }

    }
}