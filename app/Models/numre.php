<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class numre extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'numres';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_member', 'num_re'];

    public function numre(){
        return $this->belongsTo('App\Model\member', 'id'); 
    }

    
}
