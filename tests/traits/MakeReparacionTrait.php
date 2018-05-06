<?php

use Faker\Factory as Faker;
use App\Models\Reparaciones\Reparacion;
use App\Repositories\Reparaciones\ReparacionRepository;

trait MakeReparacionTrait
{
    /**
     * Create fake instance of Reparacion and save it in database
     *
     * @param array $reparacionFields
     * @return Reparacion
     */
    public function makeReparacion($reparacionFields = [])
    {
        /** @var ReparacionRepository $reparacionRepo */
        $reparacionRepo = App::make(ReparacionRepository::class);
        $theme = $this->fakeReparacionData($reparacionFields);
        return $reparacionRepo->create($theme);
    }

    /**
     * Get fake instance of Reparacion
     *
     * @param array $reparacionFields
     * @return Reparacion
     */
    public function fakeReparacion($reparacionFields = [])
    {
        return new Reparacion($this->fakeReparacionData($reparacionFields));
    }

    /**
     * Get fake data of Reparacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeReparacionData($reparacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'articulo_id' => $fake->randomDigitNotNull,
            'costo_reparacion' => $fake->word,
            'fecha_ingreso' => $fake->date('Y-m-d H:i:s'),
            'fecha_egreso' => $fake->date('Y-m-d H:i:s'),
            'descripcion' => $fake->text,
            'garantia' => $fake->randomDigitNotNull,
            'cliente_id' => $fake->randomDigitNotNull,
            'empleado_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $reparacionFields);
    }
}
