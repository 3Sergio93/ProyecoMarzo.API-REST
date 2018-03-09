<?php
class Videojuego_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get($id = null)
	{
		if (!is_null($id))
		{
			$query = $this->db->select('*')->from('videojuego')->where('id', $id)->get();
			if ($query->num_rows() === 1)
			{
				return $query->row_array();
			}
		return false;
		}

		$query = $this->db->select('*')->from('videojuego')->get();
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		return false;
	}

	public function save($juego)
	{
		$this->db->set($this->_setjuego($juego))->insert('videojuego');
		if ($this->db->affected_rows() === 1)
		{
			return $this->db->insert_id();
		}
		return false;
}

	public function update($id, $juego)
	{
		$this->db->set($this->_setjuego($juego))->where('id', $id)->update('videojuego');
                if ($this->db->affected_rows() === 1)
                {
                        return true;
                }
                return false;

	}

	public function delete($id)
	{
		$this->db->where('id', $id)->delete('videojuego');
		if ($this->db->affected_rows() === 1)
		{
			return true;
		}
		return false;
	}

	public function _setjuego($juego)
	{
		return array(
			'id' => $juego['id'],
			'categoria' => $juego['categoria'],
			'nombre' => $juego['nombre']
		);
	}
}
