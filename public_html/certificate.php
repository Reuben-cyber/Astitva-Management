<?php

//session_save_path('../../tmp');
//session_start();

require('rotation.php');
//require('../lib/Number_Words.php');
//require('../lib/Number_WordsINR.php');

class PDF extends PDF_Rotate
{
function Header()
{
    //Put the watermark
	$this->AddFont('Allura-Regular','','Allura-Regular.php');
    $this->SetFont('Allura-Regular','',16);
	$this->SetDrawColor(199,199,198);
	$this->SetFillColor(199,199,198);
    $this->Rect(2,2,252,199,'F');
	$this->Image('images/DES_logo.png',117,5,26);
    $this->SetXY(90,25);
    $this->Write(20,'DECCAN EDUCATION SOCIETY\'S');
	$f2 = "Allura-Regular";
    $this->SetFont($f2,'',14);
    $this->SetXY(44,34);
    $this->Write(16,'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE (AUTONOMOUS), PUNE');
    /* $this->SetXY(36,21);
    $this->Write(16,'Phone: (020) 26158002 / 26155332    Fax: (020) 26155716');
    $this->SetXY(36,26);
    $this->Write(16,'Email: bssk@bsskindia.org    Website: www.bsskindia.org');
    $this->SetFont('Arial','B',10);
    $this->SetXY(36,31);
    $this->Write(16,'Trust No. E-641 PUNE.');
    $this->SetXY(80,31);
    $this->Write(16,'PAN: AAATB2951P');
    $this->SetXY(94,33);
    $this->SetFont('Arial','BU',13);
    $this->Write(36,'RECEIPT'); */
    $this->Line(30,46,226,46);
    $this->RotatedText(48,55,'images/lion_wm.png',0,100,100);
}

function RotatedText($x, $y, $txt, $angle, $w, $h)
{
    //Text rotated around its origin
    $this->Rotate($angle,$x,$y);
    //$this->Text($x,$y,$txt);
    $this->Image($txt,$x,$y, $w, $h);
    $this->Rotate(0);
}

function RotatedText1($x, $y, $txt, $angle)
{
    //Text rotated around its origin
    $this->Rotate($angle,$x,$y);
    $this->Text($x,$y,$txt);
    //$this->Image($txt,$x,$y);
    $this->Rotate(0);
}
}

function extract_unit($string, $start, $end)
{
    $pos = stripos($string, $start);
    $str = substr($string, $pos);
    $str_two = substr($str, strlen($start));
    $second_pos = stripos($str_two, $end);
    $str_three = substr($str_two, 0, $second_pos);
    $unit = trim($str_three); // remove whitespaces
    return $unit;
}

function MFormatIndia($num){
    $mynum = number_format($num, 2, ".", "");
    $num1 = explode(".",$mynum);
    $num = $num1[0];
    $remains = $num1[1];
    $explrestunits = "" ;
    if(strlen($num)>3){
        $lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++){
            // creates each of the 2's group and adds a comma to the end
            if($i==0)
            {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            }else{
                $explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
        $thecash = $num;
    }
    $thecash = $thecash.".".$remains;
    return $thecash; // writes the final format where $currency is the currency symbol.
}

//certificate begins here
$pdf=new PDF('L','mm',array(203,256));
$pdf->AddPage();
$pdf->AddFont('Allura-Regular','','Allura-Regular.php');
$pdf->SetFont('Allura-Regular','',11);
$pdf->SetAutoPageBreak(1,5);
$pdf->RotatedText(5,5,'design1.png',0, 60, 60);
$pdf->RotatedText(250,5,'design1.png',270, 60, 60);
$pdf->RotatedText(5,200,'design1.png',90, 60, 60);
$pdf->RotatedText(250,200,'design1.png',180, 60, 60);
$pdf->SetXY(10,49);
//$txt="Receipt No.: ";
//$pdf->MultiCell(0,5,$txt,0,'L');


$pattern1 = '/\\//';
$replacement1 = '_';
//$subject1 = $receiptnumber;
//$rno=preg_replace($pattern1, $replacement1, $subject1, -1 ).".pdf";
$receiptfile="abcd.pdf";
//if($rprn == "0") {
$pdf->Output('F',$receiptfile);
//}
$pdf->Output();
?>