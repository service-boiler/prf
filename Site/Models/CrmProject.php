<?php

namespace ServiceBoiler\Prf\Site\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CrmProject extends Model
{

	/**
	 * @var string
	 */
	protected $table = 'crm_projects';
    
    public $timestamps = FALSE;
    /**
     * @var array
     */
    protected $fillable = [
        'name', 
    ];

	/**
	 * @var array
	 */
    protected $casts = [
        'name'            => 'string',
    ];

	
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

}
