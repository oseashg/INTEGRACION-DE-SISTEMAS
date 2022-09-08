<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class clientesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getALL()
    {
      
        $clientes = [];

        $clientes = new stdclass();

        $clientes->id="3e1404cb-2f24-4d85-ae1b-e8b65151600b"
        $clientes->codigo="A001";
        $clientes->nombres="oseasflores";

        $clientes[]=$clientes;

        $response->succes=true;
        $response->data=$clientes;

        return response()->json(response,200);


    }
}