<?php

require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<strong> mPDF </strong> é uma biblioteca PHP que permite gerar arquivos PDF a partir de HTML/CSS com facilidade. Essa biblioteca é particularmente útil para converter páginas da web em documentos PDF, mantendo a formatação visual e o layout da página original. mPDF suporta uma ampla gama de funcionalidades, incluindo tabelas, imagens, fontes personalizadas, cabeçalhos e rodapés, 
marcas. Funcionalidades do mPDF
Conversão de HTML/CSS para PDF : m
Suporte a Fontes : I
Manipulação de Páginas :

</');
$mpdf->Output();