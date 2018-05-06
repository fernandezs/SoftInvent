<?php

namespace App\Http\Controllers;

use App\DataTables\RepuestoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRepuestoRequest;
use App\Http\Requests\UpdateRepuestoRequest;
use App\Repositories\RepuestoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RepuestoController extends AppBaseController
{
    /** @var  RepuestoRepository */
    private $repuestoRepository;

    public function __construct(RepuestoRepository $repuestoRepo)
    {
        $this->repuestoRepository = $repuestoRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Repuesto.
     *
     * @param RepuestoDataTable $repuestoDataTable
     * @return Response
     */
    public function index(RepuestoDataTable $repuestoDataTable)
    {
        return $repuestoDataTable->render('repuestos.index');
    }

    /**
     * Show the form for creating a new Repuesto.
     *
     * @return Response
     */
    public function create()
    {
        return view('repuestos.create');
    }

    /**
     * Store a newly created Repuesto in storage.
     *
     * @param CreateRepuestoRequest $request
     *
     * @return Response
     */
    public function store(CreateRepuestoRequest $request)
    {
        $input = $request->all();

        $repuesto = $this->repuestoRepository->create($input);

        Flash::success('Repuesto guardado exitosamente.');

        return redirect(route('repuestos.index'));
    }

    /**
     * Display the specified Repuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            Flash::error('Repuesto no encontrado');

            return redirect(route('repuestos.index'));
        }

        return view('repuestos.show')->with('repuesto', $repuesto);
    }

    /**
     * Show the form for editing the specified Repuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            Flash::error('Repuesto no encontrado');

            return redirect(route('repuestos.index'));
        }

        return view('repuestos.edit')->with('repuesto', $repuesto);
    }

    /**
     * Update the specified Repuesto in storage.
     *
     * @param  int              $id
     * @param UpdateRepuestoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepuestoRequest $request)
    {
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            Flash::error('Repuesto no encontrado');

            return redirect(route('repuestos.index'));
        }

        $repuesto = $this->repuestoRepository->update($request->all(), $id);

        Flash::success('Repuesto actualizado exitosamente.');

        return redirect(route('repuestos.index'));
    }

    /**
     * Remove the specified Repuesto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $repuesto = $this->repuestoRepository->findWithoutFail($id);

        if (empty($repuesto)) {
            Flash::error('Repuesto no encontrado');

            return redirect(route('repuestos.index'));
        }

        $this->repuestoRepository->delete($id);

        Flash::success('Repuesto eliminado exitosamente.');

        return redirect(route('repuestos.index'));
    }
}
