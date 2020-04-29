<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Lingkaran_model extends CI_model
{
	public function hitung_lingkaran($r,$pil)
	{
		$p = 3.14;

		if ($pil =='luas_lingkaran') {
			return 4*($p*($r*$r));
		}else {
			return 4/3*($p*($r*$r*$r));
        }
	}
}