<?php

namespace Tests\Feature;

use App\Models\Abonne;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AbonneTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);


        $response = $this->get('api/Abonne');
        $response->assertStatus(200);

        //    // supression
        //     $response = $this->withHeaders(["X-Header" => "value"])->delete('api/Abonne/5');
        //     $response->assertStatus(200);

        // Ajout
        $abonne = new Abonne();
        $abonne = [
            "nom" => "Major Skiles",
            "prenom" => "Shaun Ortiz",
            "age" => 4,
            "rue" => "MJY0HETP3",
            "sexe" => "R",
            "profession" => "L8YD7EMQL",
            "id_motivation" => 32,
            "code_postal" => "PTRF18ATS",
            "ville" => "ISWTOJXXM",
            "paye" => "V7RXX2UUO",
            "telephone" => "696885555",
            "email" => "bahrisxssnger.rosalee@yahoo.com"
        ];
        $response = $this->withHeaders(["X-Header" => "value"])->post('api/Abonne', $abonne);
        $response->assertStatus(200);




        // mise ajoure
           $abonne = new Abonne();
           $abonne = [
            "nom" => "Major Skiles",
            "prenom" => "Shaun Ortiz",
            "age" => 4,
            "rue" => "MJY0HETP3",
            "sexe" => "R",
            "profession" => "L8YD7EMQL",
            "id_motivation" => 32,
            "code_postal" => "PTRF18ATS",
            "ville" => "ISWTOJXXM",
            "paye" => "V7RXX2UUO",
            "telephone" => "696885555",
            "email" => "bahrisxssnger.rosalee@yahoo.com"
           ];
           $response = $this->withHeaders(["X-Header" => "value"])->patch('api/Abonne/1',$abonne);
           $response->assertStatus(200);
    }

}
