<?php

require_once __DIR__ . '/vendor/autoload.php';

//echo "Укажите дирректория для конвертации файлов, например: ";

$html_file = file_get_contents('directory/sample.html');
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html_file);
$mpdf->Output('temp/test.pdf');
