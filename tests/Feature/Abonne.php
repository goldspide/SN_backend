<?php

namespace Tests\Feature;

use App\Models\Abonne;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AbonneFactory extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        //get
;
          $response = $this->get('api/Abonnes');

         $response->assertStatus(200);

        // supression
         $response = $this->withHeaders(["X-Header" => "value"])->delete('api/Abonnes/5');
         $response->assertStatus(200);

           // Ajout
        $abonne= new Abonne();
        $abonne = [
            'nom'=>'ivan',
            'prenom'=>'drop',
            'age'=> 12,
            'sexe'=>'F',
            'profession'=>'docteur',
            'code postal'=>'BP 54454',
            'pays'=>'cameroon',
            'email'=>'ivandan@gmail.com',
            'id_rubrique'=>'10',
            'ville'=>'douala',
             'telephone'=>'658993215'
        ];
        $response = $this->withHeaders(["X-Header" => "value"])->post('api/Abonnes',$abonne);
        $response->assertStatus(200);




        // mise ajoure
        $abonne = new Abonne();
        $abonne = [
            'nom'=>'ivan',
            'prenom'=>'drop',
            'age'=> 12,
            'sexe'=>'F',
            'profession'=>'docteur',
            'code postal'=>'BP 54454',
            'pays'=>'cameroon',
            'email'=>'ivandan@gmail.com',
            'id_rubrique'=>'10',
            'ville'=>'douala',
             'telephone'=>'658993215'
        ];
        $response = $this->withHeaders(["X-Header" => "value"])->patch('api/Abonnes/1',$abonne);
        $response->assertStatus(200);

    }


}
