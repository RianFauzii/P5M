



<?php
    $url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
    $dataMahasiswa = json_decode($url, true);

    $tanggal1 = $_POST['tanggal1'];
    $tanggal2 = date('Y-m-d', strtotime('+1 days', strtotime($_POST['tanggal2'])));
    $tanggalFT2 = $tanggal2;

    $date1 = new DateTime($tanggal1);
    $date2 = new DateTime($tanggal2);
    $diff = $date2->diff($date1);
    $jumlahHari = $diff->days;
    require 'vendor/autoload.php';

    // koneksi php dan mysql
    // $koneksi = mysqli_connect("localhost", "root", "", "test");

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Style\Border;
    use PhpOffice\PhpSpreadsheet\Style\Alignment;  

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // sheet pertama
    $sheet->setTitle('Sheet 1');
    $sheet->setCellValue('B4', 'No');
    $sheet->setCellValue('C4', 'Nim');
    $sheet->setCellValue('D4', 'Nama');
    $sheet->setCellValue('E4', 'Jenis');
    $sheet->setCellValue('F4', 'Jumlah Jam');
    $sheet->setCellValue('G4', 'Keterangan');
    $sheet->setCellValue('H4', 'Tanggal');

    $no = 0;  $row = 4;

    foreach ($dataMahasiswa as $dm){
        if($dm['kelas'] == $_POST['dropdown']){ 
            $no++;
            $row++;
            $sheet->setCellValue('B'.$row, $no);
            $sheet->setCellValue('C'.$row, $dm['nim']);
            $sheet->setCellValue('D'.$row, $dm['nama']);
            $sheet->setCellValue('E'.$row, 'Murni');
            $sheet->setCellValue('F'.$row, '0');
            $sheet->setCellValue('G'.$row, 'Jam Minus P5M Prodi MI Periode '.$tanggal1. ' - ' .$tanggal2);
            $sheet->setCellValue('H'.$row, date("y-M-d"));

        }
    }

    $sheet->getColumnDimension('B')->setWidth(5);
    $sheet->getColumnDimension('C')->setWidth(15);
    $sheet->getColumnDimension('D')->setWidth(50);
    $sheet->getColumnDimension('E')->setWidth(10);
    $sheet->getColumnDimension('F')->setWidth(12);
    $sheet->getColumnDimension('G')->setWidth(55);
    $sheet->getColumnDimension('H')->setWidth(15);

    $sheet->mergeCells('B2:H2');
    $sheet->setCellValue('B2', 'Laporan Jam Minus P5M Kelas '.substr($_POST['dropdown'],-2) );
    $sheet->getStyle('B2:H2')->getFont()->setSize(18)->setBold(true);
    $sheet->getStyle('B2:H2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('B4:H4')->getFont()->setBold(true);
    $sheet->getStyle('B4:H'.$row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('D5:D'.$row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

    // get the cell style
    $style = $sheet->getStyle('B4:H'.$row);
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THICK,
            ],
        ],
    ];
    $style->applyFromArray($styleArray);


    // $style = $sheet->getStyle('B4:H4');
    // $styleArray = [
    //     'borders' => [
    //         'allBorders' => [
    //             'borderStyle' => Border::BORDER_THICK,
    //         ],
    //     ],
    // ];
    // $style->applyFromArray($styleArray);


    $writer = new Xlsx($spreadsheet);
    ob_clean();

    $fileName = "Laporan Jam Minus P5M.xlsx";
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment;filename=\"$fileName\"");
    $writer->save("php://output");


?>
