<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Trueno AE86',16,8,1998)
			,array('Mazda RX7',8,4,1996)
			,array('BMW E30',15,10,2000)
			,array('Porsche',10,7,2005)
			,array('Honda NSX',20,15,2000)
		);

		return $cars;
	}
}