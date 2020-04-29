<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Tabung_model extends CI_model
{
	public function hitung_tabung($p,$t,$r,$pil)
	{
		$p = 3.14;
		
		if ($pil =='luas_tabung') {
			return 2*($p * $r * ($r + $t));
		}else {
			return $p * ($r * $r) * $t;
        }
	}
}