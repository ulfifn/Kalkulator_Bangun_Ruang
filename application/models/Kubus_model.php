<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Kubus_model extends CI_model
{
	public function hitung_kubus($r,$pil)
	{
		if ($pil =='luas_kubus') {
			return 6*($r*$r);
		}else {
			return $r*$r*$r;
        }
	}
}