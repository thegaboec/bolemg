<?php
namespace App\Aplicacion\Utilidades\Reportes;

use Dompdf\Dompdf;
use Dompdf\Options;

class Reporteart{

 

    public function generarReporte($datos ){

        $css=file_get_contents('./assets/css/bootstrap.min.css');
        $name="Reporte de artesanados.pdf";
        
        $html=file_get_contents('./src/Vistas/layout/reporteartesanados.html');
        $html=preg_replace('/.style{}/',$css,$html);
        $tr='';
        foreach($datos as $dato){

            $tr.='
            <tr>
            <td>'. $dato->idartesanado.'</td>
            <td>'. $dato->categoria.'</td>
            <td>'. $dato->estado.'</td>
            ¿
            </tr>
            ';
        }
        
        $html=preg_replace('/%tbody%/',$tr,$html);
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4');
        
        
        $dompdf->render();
        
        header('Content-Type: application/pdf');
        header('Content-disposition: inline; filename="' . $name . '"');
        echo $dompdf->output(['compress'=>1]);
    }
}