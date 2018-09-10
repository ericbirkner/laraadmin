<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Upload;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() {
        //$productos = Producto::orderBy('nombre', 'desc')->paginate(1);
        $productos = Producto::orderBy('nombre', 'desc')->get();
        //echo "<pre>";
        //print_r($productos);
        return view('welcome', array('productos' => $productos,'titulo'=>'titulo rql'));
        //return view('welcome');
    }

    public function get_producto($id) {
        $producto = Producto::find($id)->first();
        return view('producto', array('producto' => $producto));
    }
}
