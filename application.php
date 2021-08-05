<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = ['html', 'js', 'php'];

echo "Укажите директорию для конвертации файлов, например: directory/folder\n";

$root = readline();
$files = scandir($root);

foreach ($files as $file) {
    $info = new SplFileInfo($file);

    if (in_array($info->getExtension(), $config)) {
        $path = $root . "/" . $file;
        echo "Найден файл по пути " . $path . "\n";
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage();
        $mpdf->Write(0, file_get_contents($path));
        $mpdf->Output($path . ".pdf");
        echo "Создан новый .pdf файл по пути " . $path . ".pdf\n";
        }
}

