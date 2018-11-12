<?php

namespace App;

 use Illuminate\Notifications\Notifiable;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
 use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
class Category extends Model
{
    //use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $deletes =['deleted_at'];
    protected $table = 'products';

    protected $fillable = [
        'name',
          'body',
          'price',
          'picture',
          'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     
     */
	public static function boot()
    {
        parent::boot();

        Category::observe(new UserActionsObserver);
    } 

     public  function products()
    {
        return $this->hasMany('App\Products','catalog_id');
    }
}
