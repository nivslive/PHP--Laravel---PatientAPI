<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PatientCreationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_creation_patient(): void
    {
        $this->assertTrue(true);
        $patient = Patient::create([
            'code' => 'JFEPO85TJ1',
            'name' => 'Test',
            'address' => 'Av. Andrade de Souza 250',
            'birthday' => '10/12/2022',
            'phone' => '124908241',
        ]);
    }
}
