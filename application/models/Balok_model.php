<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Balok_model extends CI_model
{
	public function hitung_balok($p,$l,$t,$pil)
	{
		if ($pil =='luas_balok') {
			return 2*(($p * $l) + ($p * $t) + ($t * $l));
		}else {
			return $p * $l * $t;
        }
	}
}