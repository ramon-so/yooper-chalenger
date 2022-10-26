<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ServicesController;

class ServicesController extends Controller
{
    public function saveContract(Request $request){
        $inputs = $request->all();
        try{
            $services = explode(';', $inputs['services']);
            unset($services[count($services) - 1]);
            \DB::insert('insert into clients (name, email, phone, business) values (?, ?, ?, ?)', [$inputs['name'], $inputs['email'], $inputs['phone'], $inputs['business']]);
            $clientId = \DB::select('select id from clients where name = ? and email = ? LIMIT 1', [$inputs['name'], $inputs['email']]);
            foreach($services as $service){
                $serviceId = \DB::select('select id from services where servicce_name = ?', [$service]);
                \DB::insert('insert into contrated_service (client_id, service_id, active_contract) values (?, ?, ?)', [$clientId[0]->id, $serviceId[0]->id, true]);
            }
            return json_encode(array('usuario salvo com sucesso'));
        }catch(\Exception $e){
            return json_encode($e->getMessage());
        }
    }

    public function attContract(Request $request){
        $inputs = $request->all();
        try{
            \DB::update('update clients set name = ?, email = ?, phone = ?, business = ? where id = ?', [$inputs['name'], $inputs['email'], $inputs['phone'], $inputs['business'], $inputs['id']]);
            return json_encode(array('usuario salvo com sucesso'));
        }catch(\Exception $e){
            return json_encode($e->getMessage());
        }
    }

    public function deleteClient(Request $request){
        $inputs = $request->all();
        try{
            \DB::delete('delete from clients where id = ?', [$inputs['id']]);
            return json_encode(array('usuario excluido com sucesso'));
        }catch(\Exception $e){
            return json_encode($e->getMessage());
        }
    }
    
    
}
