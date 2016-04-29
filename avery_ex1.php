<?php
require('PDF_Label.php');

/*------------------------------------------------
To create the object, 2 possibilities:
either pass a custom format via an array
or use a built-in AVERY name
------------------------------------------------*/

// Example of custom format
// $pdf = new PDF_Label(array('paper-size'=>'A4', 'metric'=>'mm', 'marginLeft'=>1, 'marginTop'=>1, 'NX'=>2, 'NY'=>7, 'SpaceX'=>0, 'SpaceY'=>0, 'width'=>99, 'height'=>38, 'font-size'=>14));

// Standard format
$pdf = new PDF_Label('5163');

$pdf->AddPage();

// Print labels
for($i=1;$i<=10;$i++) {
    $text = sprintf("%s\n%s\n%s\n%s\n%s\n%s", "Line1 $i", '5163/8163 labeltype', 'line3', 'line4', 'line5', 'line6');
    $pdf->Add_Label($text);
}

$pdf->Output();
?>
