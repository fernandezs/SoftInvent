<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRepuestoAPIRequest;
use App\Http\Requests\API\UpdateRepuestoAPIRequest;
use App\Models\Repuesto;
use App\Repositories\RepuestoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class RepuestoController
 * @package App\Http\Controllers\API
 */

class RepuestoAPIController extends AppBaseController
{
    /** @var  RepuestoRepository */
    private $repuestoRepository;

    public function __construct(RepuestoRepository $repuestoRepo)
    {
        $this->repuestoRepository = $repuestoRepo;
    }

    /**
     * Display a listing of the Repuesto.
     * GET|HEAD /repuestos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->repuestoRepository->pushCriteria(new RequestCriteria($request));
        $this->repuestoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $repuestos = $this->repuestoRepository->all();

        return $this->sendResponse($repuestos->toArray(), 'Repuestos recuperado con éxito');
    }

    /**
     * Store a newly created Repuesto in storage.
     * POST /repuestos
     *
     * @param CreateRepuestoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRepuestoAPIRequest $request)
    {
        $input = $request->all();

        $repuestos = $this->repuestoRepository->create($input);

        return $this->sendResponse($repuestos->toArray(), 'Repuesto guardado exitosamente');
    }

    /**
     * Display the specified Repuesto.
     * GET|HEAD /repuestos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Repuesto $repuesto */
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            return $this->sendError('Repuesto no encontrado');
        }

        return $this->sendResponse($repuesto->toArray(), 'Repuesto recuperado con éxito');
    }

    /**
     * Update the specified Repuesto in storage.
     * PUT/PATCH /repuestos/{id}
     *
     * @param  int $id
     * @param UpdateRepuestoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepuestoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Repuesto $repuesto */
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            return $this->sendError('Repuesto no encontrado');
        }

        $repuesto = $this->repuestoRepository->update($input, $id);

        return $this->sendResponse($repuesto->toArray(), 'Repuesto actualizado exitosamente');
    }

    /**
     * Remove the specified Repuesto from storage.
     * DELETE /repuestos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Repuesto $repuesto */
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            return $this->sendError('Repuesto no encontrado');
        }

        $repuesto->delete();

        return $this->sendResponse($id, 'Repuesto eliminado exitosamente');
    }
}
