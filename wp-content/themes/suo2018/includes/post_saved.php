<?php


function post_saved_custom_action($post_id){
	// Only if saved post-type is bands
	if(get_post_Type($post_id)==='bands') {
		// Get Data
		$runningOrder = build_running_order();

		// Build HTML
		$html = '<style>td{border: 1px solid black;padding:5px}h1,h2{text-transform: uppercase}h1{text-align: center}</style>';
		$html .= '<h1>SUO - Running Order</h1>';
		foreach($runningOrder as $key => $stage){
			$html.= '<h2>'.$key.'</h2>';
			$html.='<table>';
				foreach($stage as $band){
					if($band->post_status === 'publish') {
						$html .= '<tr>';
							$html .= '<td>';
								$html .= '<strong>' . get_field( 'startzeit', $band->ID ) . ' - ' . get_field( 'endzeit', $band->ID ) . ' Uhr</strong>';
								$html .= '</td>';
							$html .= '<td>';
								$html .= get_the_title( $band->ID );
							$html .= '</td>';
						$html .= '</tr>';
					}
				}
			$html.='</table><br><br>';
		}
		$html .= '<p>Stand: '.date('d.m.Y').'</p>';

		// Save HTML to PDF
		$html2pdf = new Spipu\Html2Pdf\Html2Pdf( 'P', 'A4', 'en' );
		$html2pdf->writeHTML( $html );
		$html2pdf -> output(get_template_directory().'/assets/pdf/suo_running_order.pdf','F');
	}
}

add_action('save_post','post_saved_custom_action');