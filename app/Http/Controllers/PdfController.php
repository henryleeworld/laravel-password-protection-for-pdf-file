<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;

class PdfController extends Controller 
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Dompdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function encrypt() 
    {
        $password      = 'test123';
        $ownerPassword = 'test456';
        $this->pdf->getCanvas()->get_cpdf()
                         ->setEncryption($password, $ownerPassword, ['print', 'modify', 'copy', 'add']);
        $html = view('welcome')->render();
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        file_put_contents('output.pdf', $this->pdf->output());
    }
}
