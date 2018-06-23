<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public $FirstName;
    public $LastName;
    public $Mobile;
    
    
    
    public function insertUser() {
        try{
            DB::insert('INSERT INTO User(FirstName,LastName,Mobile) VALUES(?,?,?)',[$this->FirstName,$this->LastName,$this->Mobile]);
            return array("Success"=>true);
        }
        catch(Execption $e){
            return array("Success"=>false, "ErrorMessage"=>$e->getMessage());
        }
    }
}
