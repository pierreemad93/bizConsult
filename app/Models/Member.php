<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members' ;

    protected $guarded = ['id'];

    /**
     *  Upload path
    **/
    const UPLOADPATH = 'images/' ;
     /**
      *  Fields that will handle upload document
     **/
      const UPLOADFIELDS = [];

      /**
       *  Relationship
       **/

        /**
         *  Attributes
        **/

      /**
       *  Custom Functions
      **/
}

