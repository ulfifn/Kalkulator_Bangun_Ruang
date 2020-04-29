<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Prisma_model extends CI_model
{
	public function hitung_prisma($s,$t,$pil)
	{
		$pytagoras = ((0.5 * $s) * (0.5 * $s)) + ($s * $s);
        $tsegitiga = sqrt($pytagoras); 
        $luas_alas = 0.5 * ($s * $tsegitiga);
        
		if ($pil =='luas_prisma') {
			return (2 * $luas_alas) * (3 * ($s * $t));
		}else {
			return $luas_alas * $t;
        }
	}
}