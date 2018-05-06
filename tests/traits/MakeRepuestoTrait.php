<?php

use Faker\Factory as Faker;
use App\Models\Repuesto;
use App\Repositories\RepuestoRepository;

trait MakeRepuestoTrait
{
    /**
     * Create fake instance of Repuesto and save it in database
     *
     * @param array $repuestoFields
     * @return Repuesto
     */
    public function makeRepuesto($repuestoFields = [])
    {
        /** @var RepuestoRepository $repuestoRepo */
        $repuestoRepo = App::make(RepuestoRepository::class);
        $theme = $this->fakeRepuestoData($repuestoFields);
        return $repuestoRepo->create($theme);
    }

    /**
     * Get fake instance of Repuesto
     *
     * @param array $repuestoFields
     * @return Repuesto
     */
    public function fakeRepuesto($repuestoFields = [])
    {
        return new Repuesto($this->fakeRepuestoData($repuestoFields));
    }

    /**
     * Get fake data of Repuesto
     *
     * @param array $postFields
     * @return array
     */
    public function fakeRepuestoData($repuestoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'codigo' => $fake->randomDigitNotNull,
            'precio' => $fake->word,
            'categoria_id' => $fake->randomDigitNotNull,
            'tipo' => $fake->word,
            'proveedor_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $repuestoFields);
    }
}
