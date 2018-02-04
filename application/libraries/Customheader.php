<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Include the main TCPDF library (search for installation path).
require_once('tcpdf.php');

class CustomHeader extends TCPDF {
    /* custom table */
    // Load table data from file
    public function LoadData($file) {
        // Read file lines
        $lines = file($file);
        $data = array();
        foreach($lines as $line) {
            $data[] = explode(';', chop($line));
        }
        return $data;
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        //$w = array(40, 35, 40, 45);
        
        
    }
}