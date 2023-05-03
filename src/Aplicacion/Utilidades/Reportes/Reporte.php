<?php
namespace App\Aplicacion\Utilidades\Reportes;

use Dompdf\Dompdf;
use Dompdf\Options;

class Reporte{

 

    public function generarReporte($datos ){

        $css=file_get_contents('./assets/css/bootstrap.min.css');
        $name="Reporte de artesanos.pdf";
        
        $html=file_get_contents('./src/Vistas/layout/reporte.html');
        $html=preg_replace('/.style{}/',$css,$html);
        $tr='';
        foreach($datos as $dato){

            $tr.='
            <tr>
            <td>'. $dato->idartesano.'</td>
            <td>'. $dato->nombres.'</td>
            <td>'. $dato->apellidos.'</td>
            <td>'. $dato->idartesanado.'</td>
            <td>'. $dato->estado.'</td>
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