<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index($value='')
    {
      return 'Bodega';
    }
    public function recepcion($value='')
    {
      return 'Recepcion';
    }
    public function movimientos($value='')
    {
      return 'Bodega';
    }
    public function pedidos($value='')
    {
      return 'Bodega';
    }
    public function inventario($value='')
    {
      return 'Bodega';
    }
}
