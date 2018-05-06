<?php

use App\Models\Repuesto;
use App\Repositories\RepuestoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RepuestoRepositoryTest extends TestCase
{
    use MakeRepuestoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var RepuestoRepository
     */
    protected $repuestoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->repuestoRepo = App::make(RepuestoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateRepuesto()
    {
        $repuesto = $this->fakeRepuestoData();
        $createdRepuesto = $this->repuestoRepo->create($repuesto);
        $createdRepuesto = $createdRepuesto->toArray();
        $this->assertArrayHasKey('id', $createdRepuesto);
        $this->assertNotNull($createdRepuesto['id'], 'Created Repuesto must have id specified');
        $this->assertNotNull(Repuesto::find($createdRepuesto['id']), 'Repuesto with given id must be in DB');
        $this->assertModelData($repuesto, $createdRepuesto);
    }

    /**
     * @test read
     */
    public function testReadRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $dbRepuesto = $this->repuestoRepo->find($repuesto->id);
        $dbRepuesto = $dbRepuesto->toArray();
        $this->assertModelData($repuesto->toArray(), $dbRepuesto);
    }

    /**
     * @test update
     */
    public function testUpdateRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $fakeRepuesto = $this->fakeRepuestoData();
        $updatedRepuesto = $this->repuestoRepo->update($fakeRepuesto, $repuesto->id);
        $this->assertModelData($fakeRepuesto, $updatedRepuesto->toArray());
        $dbRepuesto = $this->repuestoRepo->find($repuesto->id);
        $this->assertModelData($fakeRepuesto, $dbRepuesto->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteRepuesto()
    {
        $repuesto = $this->makeRepuesto();
        $resp = $this->repuestoRepo->delete($repuesto->id);
        $this->assertTrue($resp);
        $this->assertNull(Repuesto::find($repuesto->id), 'Repuesto should not exist in DB');
    }
}
