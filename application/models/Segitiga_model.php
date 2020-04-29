<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Segitiga_model extends CI_model
{
	public function hitung_segitiga($a,$t,$pil)
	{
        
		if ($pil =='luas_segitiga') {
			return ($a * $t);
		}else {
			return $a * $t;
        }
	}
}