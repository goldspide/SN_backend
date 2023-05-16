<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Motivation
 *
 * @property int $id
 * @property string $Intitule
 *
 * @property Collection|Abonne[] $abonnes
 *
 * @package App\Models
 */
class Motivation extends Model
{

    use HasFactory;
    protected $table = 'motivation';
	public $timestamps = false;

	protected $fillable = [
		'Intitule'
	];

	public function abonnes()
	{
		return $this->hasMany(Abonne::class, 'id_motivation');
	}
}
