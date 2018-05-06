<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ProveedorRepository;
use App\Repositories\CategoriaRepository;
use App\Repositories\ArticuloRepository;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $proveedorRepository;
    private $categoriaRepository;
    private $articuloRepository;
    public function __construct(ProveedorRepository $proveedorRepo, CategoriaRepository $categoriaRepo, ArticuloRepository $articuloRepo)
    {
        $this->proveedorRepository = $proveedorRepo;
        $this->categoriaRepository = $categoriaRepo;
        $this->articuloRepository = $articuloRepo;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $proveedores_count = $this->proveedorRepository->model()::count();
        $categorias_count = $this->categoriaRepository->model()::count();
        $articulos_count = $this->articuloRepository->model()::count();
        return view('adminlte::home', compact('proveedores_count','categorias_count', 'articulos_count'));
    }
}