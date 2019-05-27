<?php
namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
	protected $table ='pendientes';
	protected $primaryKey='tareaid';
	public $incrementing=true;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tareaid','name', 'description', 'estatus','usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];
}