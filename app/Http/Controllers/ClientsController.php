<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function getAllClients(Request $request){
        $clients = DB::select('select * from clients');
        $dbServices = DB::select('select * from services');

        for($i = 0; $i < count($clients); $i++){
            $contrated_service = DB::select('select * from contrated_service where client_id = ?', [$clients[$i]->id]);
            $services = "";
            foreach($contrated_service as $serviceForSearch){
                $service = DB::select('select servicce_name from services where id = ?', [$serviceForSearch->service_id]);
                $services = $services . $service[0]->servicce_name . "; ";
            }
            $clients[$i] = json_decode(json_encode($clients[$i]), true);
            $clients[$i]['services'] = $services;
        }
        return view('contracts', ['clients' => $clients, 'services' => $dbServices]);
    }

    public function getClient(Request $request){
        $inputs = $request->all();
        $clients = DB::select('select * from clients where id = ?', [$inputs['id']]);
            $contrated_service = DB::select('select * from contrated_service where client_id = ?', [$clients[0]->id]);
            $services = "";
            foreach($contrated_service as $serviceForSearch){
                $service = DB::select('select servicce_name from services where id = ?', [$serviceForSearch->service_id]);
                $services = $services . $service[0]->servicce_name . "; ";
            }
        
        return view('client', ['client' => $clients, 'services' => $services]);
    }

    public function getClientInfo(Request $request){
        $inputs = $request->all();
        $client = DB::select('select * from clients where id = ?', [$inputs['id']]);
        return json_encode($client);
    }
}
