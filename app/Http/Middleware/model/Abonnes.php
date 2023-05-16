<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Abonne
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property int $age
 * @property string $sexe
 * @property string $profession
 * @property int $id_motivation
 * @property string $code postal
 * @property string $ville
 * @property string $paye
 * @property string|null $telephone
 * @property string $email
 *
 * @property Motivation $motivation
 *
 * @package App\Models
 */
class Abonnes extends Model
{
    use HasFactory;
	protected $table = 'abonne';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'id_motivation' => 'int'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'age',
		'sexe',
		'profession',
		'id_motivation',
		'code postal',
		'ville',
		'paye',
		'telephone',
		'email'
	];

	public function motivation()
	{
		return $this->belongsTo(Motivation::class, 'id_motivation');
	}
}
