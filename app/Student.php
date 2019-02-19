<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = ['sname','standard'];	//Which fields are fillable only: For security purpose
    public $timestamps  = false;		//Laravel automatically turns timestamps true; Which shows error
}
