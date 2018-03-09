<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Videojuego extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('videojuego_model');
	}

	public function index_get()
	{
		$juegos = $this->videojuego_model->get();
		$this->response(array('response' => $juegos));
	}

	public function find_get($id)
	{
		$juego = $this->videojuego_model->get($id);
		$this->response(array('response' => $juego));
	}

	public function index_post()
	{
		$id = $this->videojuego_model->save($this->post('juego'));
		$this->response(array('response' => $id));
	}

	public function index_put($id)
	{
		$update = $this->videojuego_model->update($id, $this->put('juego'));
		$this->response(array('response' => $update));
	}

	public function index_delete($id)
	{
		$delete = $this->videojuego_model->delete($id);
		$this->response(array('response' => $delete));
	}
}
