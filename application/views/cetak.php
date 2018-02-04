<?php

 	$this->load->library('Pdf');
	$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$json = json_decode($_COOKIE['datameja'],true);
			$pdf->SetTitle('Tiket');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html = '<h1 align="center">Warung Pak Broto</h1>
					<h3>No Meja : '.$json['no_meja'].'</h3>
					<h3>No Nota : '.$json['no_nota'].'</h3>
					<h3>Tanggal : '.$json['tanggal'].'</h3>
					<h3>Waktu   : '.$json['waktu'].'</h3>
					<br><hr><p></p><table>';
				foreach($json['listpesanan'] as $key => $current) {
    			$html .= '<tr>
        		<td>' . $current['nama'] . '</td>
        		<td>' . $current['qty'] . '</td>
        		<td>' . $current['harga'] . '</td>
    			</tr>';
			}
			$html .= '</table><hr><div><h3 align="right">TOTAL : Rp '.$json['total'].'</h3></div>';
			
 	 		$pdf->writeHTML($html, true, false, true, false, '');
			
 	 		
			$pdf->Output('Nota '.$json['no_nota'].'.pdf', 'I');

			