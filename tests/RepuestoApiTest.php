<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RepuestoApiTest extends TestCase
{
    use MakeRepuestoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateRepuesto()
    {
        $repuesto = $this->fakeRepuestoData();
        $this->json('POST', '/api/v1/repuestos', $repuesto);

        $this->assertApiResponse($repuesto);
    }

    /**
     * @test
     */
    public function testReadRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $this->json('GET', '/api/v1/repuestos/'.$repuesto->id);

        $this->assertApiResponse($repuesto->toArray());
    }

    /**
     * @test
     */
    public function testUpdateRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $editedRepuesto = $this->fakeRepuestoData();

        $this->json('PUT', '/api/v1/repuestos/'.$repuesto->id, $editedRepuesto);

        $this->assertApiResponse($editedRepuesto);
    }

    /**
     * @test
     */
    public function testDeleteRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $this->json('DELETE', '/api/v1/repuestos/'.$repuesto->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/repuestos/'.$repuesto->id);

        $this->assertResponseStatus(404);
    }
}
