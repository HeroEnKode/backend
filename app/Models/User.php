<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ObterMenu($id_user){

        $menu = Db::select(DB::raw('select p2.name "route", p2.description 
                            from profile_user pu 
                            inner join profiles p on pu.profile_id = p.id 
                            inner join permission_profile pp on pp.profile_id = p.id 
                            inner join permissions p2 on pp.permission_id = p2.id 
                            where pu.id = ' . $id_user));
        return $menu;
    }
}
