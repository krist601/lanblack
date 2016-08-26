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
$objPHPExcel->getActiveSheet()->getStyle("A1:AA1")->getFont()->setBold(true)->getColor()->setRGB('FFFFFF');
$objPHPExcel->getActiveSheet()->getStyle('A1:AA1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A1:AA1')->getFill()->getStartColor()->setARGB('000000');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
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
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.'1', "Preferencia de Asiento (Economy Premium)");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.'1', "Silla de Ruedas");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.'1', "Observaciones de silla de ruedas");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.'1', "Comida especial");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.'1', "Observaciones comida especial");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.'1', "Mascota");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.'1', "Observaciones mascota para asistencia emocional (sólo cabina Economy)");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.'1', "Diarios y revistas");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.'1', "Tragos");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.'1', "Otras observaciones");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.'1', "Idioma de preferencia");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.'1', "Nombre secretaria");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.'1', "Email secretaria");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.'1', "Teléfono secretaria");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA'.'1', "Familiares");
foreach ($usersBlack as $userBlack){
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
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $userBlack['UserBlack']['economyBusinessCabin']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i, $userBlack['UserBlack']['economyBusinessCabin']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, $userBlack['UserBlack']['wheelchair']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, $userBlack['UserBlack']['wheelchairObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$i, $userBlack['UserBlack']['specialFood']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$i, $userBlack['UserBlack']['specialFoodObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, $userBlack['UserBlack']['pet']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$i, $userBlack['UserBlack']['petObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$i, $userBlack['UserBlack']['newspaperObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, $userBlack['UserBlack']['drinkObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$i, $userBlack['UserBlack']['otherObservation']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $userBlack['UserBlack']['preferenceLanguage']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$i, $userBlack['UserBlack']['secretaryName']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.$i, $userBlack['UserBlack']['secretaryEmail']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i, $userBlack['UserBlack']['secretaryPhone']);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA'.$i++, $userBlack['UserBlack']['relatives']);
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