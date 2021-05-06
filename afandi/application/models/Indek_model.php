<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('tesla',22,18,'2m')
			,array('xpander',5,2,'500jt')
			,array('marcedes',15,13,'1m')
			,array('innova',17,15,'300jt')
			,array('pajero',17,15,'500jt')
		);

		return $cars;
	}
}