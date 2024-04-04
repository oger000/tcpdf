<?php
//============================================================+
// File name   : example_022.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 022 for TCPDF class
//               CMYK colors
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: CMYK colors.
 * @author Nicola Asuni
 * @since 2008-03-04
<<<<<<< HEAD
=======
 * @group color
 * @group pdf
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
<<<<<<< HEAD
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 022');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 022', PDF_HEADER_STRING);
=======
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('TCPDF Example 022');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 022', PDF_HEADER_STRING);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
<<<<<<< HEAD
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
=======
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// check also the following methods:
<<<<<<< HEAD
// SetDrawColorArray()
// SetFillColorArray()
// SetTextColorArray()

// set font
$pdf->SetFont('helvetica', 'B', 18);
=======
// setDrawColorArray()
// setFillColorArray()
// setTextColorArray()

// set font
$pdf->setFont('helvetica', 'B', 18);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Example of CMYK, RGB and Grayscale colours', '', 0, 'L', true, 0, false, false, 0);

// define style for border
$border_style = array('all' => array('width' => 2, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'phase' => 0));

// --- CMYK ------------------------------------------------

<<<<<<< HEAD
$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0);
$pdf->SetTextColor(100, 0, 0, 0);
$pdf->Rect(30, 60, 30, 30, 'DF', $border_style);
$pdf->Text(30, 92, 'Cyan');

$pdf->SetDrawColor(0, 50, 0, 0);
$pdf->SetFillColor(0, 100, 0, 0);
$pdf->SetTextColor(0, 100, 0, 0);
$pdf->Rect(70, 60, 30, 30, 'DF', $border_style);
$pdf->Text(70, 92, 'Magenta');

$pdf->SetDrawColor(0, 0, 50, 0);
$pdf->SetFillColor(0, 0, 100, 0);
$pdf->SetTextColor(0, 0, 100, 0);
$pdf->Rect(110, 60, 30, 30, 'DF', $border_style);
$pdf->Text(110, 92, 'Yellow');

$pdf->SetDrawColor(0, 0, 0, 50);
$pdf->SetFillColor(0, 0, 0, 100);
$pdf->SetTextColor(0, 0, 0, 100);
=======
$pdf->setDrawColor(50, 0, 0, 0);
$pdf->setFillColor(100, 0, 0, 0);
$pdf->setTextColor(100, 0, 0, 0);
$pdf->Rect(30, 60, 30, 30, 'DF', $border_style);
$pdf->Text(30, 92, 'Cyan');

$pdf->setDrawColor(0, 50, 0, 0);
$pdf->setFillColor(0, 100, 0, 0);
$pdf->setTextColor(0, 100, 0, 0);
$pdf->Rect(70, 60, 30, 30, 'DF', $border_style);
$pdf->Text(70, 92, 'Magenta');

$pdf->setDrawColor(0, 0, 50, 0);
$pdf->setFillColor(0, 0, 100, 0);
$pdf->setTextColor(0, 0, 100, 0);
$pdf->Rect(110, 60, 30, 30, 'DF', $border_style);
$pdf->Text(110, 92, 'Yellow');

$pdf->setDrawColor(0, 0, 0, 50);
$pdf->setFillColor(0, 0, 0, 100);
$pdf->setTextColor(0, 0, 0, 100);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937
$pdf->Rect(150, 60, 30, 30, 'DF', $border_style);
$pdf->Text(150, 92, 'Black');

// --- RGB -------------------------------------------------

<<<<<<< HEAD
$pdf->SetDrawColor(255, 127, 127);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 0, 0);
$pdf->Rect(30, 110, 30, 30, 'DF', $border_style);
$pdf->Text(30, 142, 'Red');

$pdf->SetDrawColor(127, 255, 127);
$pdf->SetFillColor(0, 255, 0);
$pdf->SetTextColor(0, 255, 0);
$pdf->Rect(70, 110, 30, 30, 'DF', $border_style);
$pdf->Text(70, 142, 'Green');

$pdf->SetDrawColor(127, 127, 255);
$pdf->SetFillColor(0, 0, 255);
$pdf->SetTextColor(0, 0, 255);
=======
$pdf->setDrawColor(255, 127, 127);
$pdf->setFillColor(255, 0, 0);
$pdf->setTextColor(255, 0, 0);
$pdf->Rect(30, 110, 30, 30, 'DF', $border_style);
$pdf->Text(30, 142, 'Red');

$pdf->setDrawColor(127, 255, 127);
$pdf->setFillColor(0, 255, 0);
$pdf->setTextColor(0, 255, 0);
$pdf->Rect(70, 110, 30, 30, 'DF', $border_style);
$pdf->Text(70, 142, 'Green');

$pdf->setDrawColor(127, 127, 255);
$pdf->setFillColor(0, 0, 255);
$pdf->setTextColor(0, 0, 255);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937
$pdf->Rect(110, 110, 30, 30, 'DF', $border_style);
$pdf->Text(110, 142, 'Blue');

// --- GRAY ------------------------------------------------

<<<<<<< HEAD
$pdf->SetDrawColor(191);
$pdf->SetFillColor(127);
$pdf->SetTextColor(127);
=======
$pdf->setDrawColor(191);
$pdf->setFillColor(127);
$pdf->setTextColor(127);
>>>>>>> d4adef47ca21c90e6483d59dcb9e5b1023696937
$pdf->Rect(30, 160, 30, 30, 'DF', $border_style);
$pdf->Text(30, 192, 'Gray');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_022.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
