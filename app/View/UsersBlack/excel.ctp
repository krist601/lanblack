<?php
App::import('Vendor', 'PHPExcel/Classes/PHPExcel');
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("LAN/TAM Black")
                            ->setLastModifiedBy("LAN/TAM Black")
                            ->setTitle("Office 2007 XLSX Test Document")
                            ->setSubject("Office 2007 XLSX Test Document")
                            ->setDescription("Usuarios Black")
                            ->setKeywords("office 2007 openxml php")
                            ->setCategory("Usuarios Black");
$i=2;
$objPHPExcel->getActiveSheet()->getStyle("A1:G1")->getFont()->setBold(true)->getColor()->setRGB('FFFFFF');
$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->getFill()->getStartColor()->setARGB('000000');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.'1', "Rut/Cédula");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.'1', "Nombre");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.'1', "Apellido Paterno");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.'1', "Apellido Materno");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.'1', "Correo");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.'1', "Genero");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.'1', "Nacionalidad");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.'1', "Tlfn. Celular");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.'1', "Tlfn. Oficina");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.'1', "Tlfn. Particular");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.'1', "Preferencia cabina (Business)");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.'1', "Preferencia cabina (Economy)");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.'1', "Familiares");
foreach ($usersBlack as $userBlack){
    if($userBlack['totalTweets']!=0){
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $userBlack['UserBlack']['identifier']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $userBlack['UserBlack']['name']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $userBlack['UserBlack']['fathersLastName']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $userBlack['UserBlack']['mothersLastName']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, $userBlack['UserBlack']['email']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, $userBlack['UserBlack']['gender']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, $userBlack['UserBlack']['nationality']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, $userBlack['UserBlack']['celPhone']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, $userBlack['UserBlack']['officePhone']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, $userBlack['UserBlack']['homePhone']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$i, $userBlack['UserBlack']['businessCabinPref']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $userBlack['UserBlack']['economyCabinPref']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i++, $userBlack['UserBlack']['relatives']);
    }
}
$objPHPExcel->getActiveSheet()->setTitle('Usuarios Black');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Usuarios_Black.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>