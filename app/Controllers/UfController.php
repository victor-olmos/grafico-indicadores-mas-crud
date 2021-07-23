<?php 
namespace App\Controllers;
use App\Models\UfModel;
use CodeIgniter\Controller;

class UfController extends Controller
{
    // trae los datos registrados
    public function getAllUf(){
      
		$uf = new UfModel($db);

		$data['uf'] = $uf->orderBy('id', 'DESC')->findAll();
		return $this->response->setJSON($data);
    } 



    // nuevo registro para uf
    public function create(){

		$uf = new UfModel($db);
		$data = [
			'fecha' => $this->request->getPost('fecha'),
			'valor' => $this->request->getPost('valor')
		];
		$uf->insert($data);
		$data = ['status'=> 'Nuevo registro Guardado'];
		return $this->response->setJSON($data);
    }

    //get by id
    public function edit(){
        $uf = new UfModel($db);
		//$hi = 'hola';
		$uf_id = $this->request->getPost('uf_id');
		$data['uf'] = $uf->find($uf_id);
		return $this->response->setJSON($data);
		
    }
 
    // eliminar registro
    public function delete(){
		
		$uf = new UfModel($db);
		$uf->delete($this->request->getPost('uf_id'));
		$message = ['status'=> 'Registro Borrado'];
		$data = ['status'=> 'Nuevo registro Guardado'];
		return $this->response->setJSON($message);
       }   
	   
	   //update

	   public function update(){
		   $uf= new UfModel();
		   $uf_id = $this->request->getPost('id');
		   $data = [
			'valor' => $this->request->getPost('valor'),
			'fecha' => $this->request->getPost('fecha')
		   ];
		   $uf->update($uf_id,$data);
		   $message = ['status' => 'Actualizado'];
		   return $this->response->setJSON($message);
	   }
}

