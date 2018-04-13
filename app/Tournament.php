<?php
/**
 * Created by PhpStorm.
 * User: Yan
 * Date: 05.04.2018
 * Time: 1:18
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {

	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'rememberToken',
	];

	public function tournaments_users() {
		return $this->belongsToMany('App\Tournament_has_user', 'tournament-user', 'id', 'tournament_id');
	}
}
