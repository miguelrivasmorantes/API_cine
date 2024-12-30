<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Actore
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon|null $fecha_nacimiento
 * @property string|null $nacionalidad
 * 
 * @property Collection|PeliculaActor[] $pelicula_actors
 *
 * @package App\Models
 */
class Actore extends Model
{
	protected $table = 'actores';
	public $timestamps = false;

	protected $casts = [
		'fecha_nacimiento' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'fecha_nacimiento',
		'nacionalidad'
	];

	public function pelicula_actors()
	{
		return $this->hasMany(PeliculaActor::class, 'id_actor');
	}
}