<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PatientTagsInclusionTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
        
        $patient = Patient::create([
            'code' => 'JFEPO85TJ1',
            'name' => 'Test',
            'address' => 'Av. Andrade de Souza 250',
            'birthday' => '10/12/2022',
            'phone' => '124908241',
        ]);

        $tag = Tag::create([
            'name' => 'Test',
        ]);
        
        $patientTag = PatientTag::create([
            'tag_id' => $tag->id,
            'patient_id' => $patient->id,
        ]);
    }
}
