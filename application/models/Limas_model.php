<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Limas_model extends CI_model
{
	public function hitung_limas($s,$t,$pil)
	{
		$pytagoras = ((0.5 * $s) * (0.5 * $s)) + ($t * $t);
        $tsisi = sqrt($pytagoras);
        
		if ($pil =='luas_limas') {
			return ($s * $s) + (4 * (0.5 * ($s * $tsisi)));
		}else {
			return ($s * $s) * $t/3;
        }
	}
}