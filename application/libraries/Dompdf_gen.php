<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use Dompdf\Dompdf;
class Dompdf_gen {
    public function __construct() {

        require_once 'dompdf/autoload.inc.php';


//initialize dompdf class

$pdf = new Dompdf();
        $CI =& get_instance();
        $CI->dompdf = $pdf;
    }
}