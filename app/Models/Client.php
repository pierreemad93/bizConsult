<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients' ;

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

