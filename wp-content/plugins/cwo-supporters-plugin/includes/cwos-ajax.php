<?php
// cwosGet Action
function cwosGet() {
	if ( get_option( 'cwo_supporters' ) && is_user_logged_in() ) {
		http_response_code( 200 );
		header( 'Content-type: application/json' );
		echo json_encode( cwos_get_supporters() );
		wp_die();
	} else {
		http_response_code( 500 );
		wp_die( 'Keine CWO Supporter in Datenbank gefundend' );
	}

}

add_action( 'wp_ajax_cwosGet', 'cwosGet' );
add_action( 'wp_ajax_nopriv_cwosGet', 'cwosGet' );

// cwosSet Action (Updates on Change and Delete)
function cwosSet() {
	if ( is_user_logged_in() ) {
		http_response_code( 200 );
		update_option( 'cwo_supporters', json_encode( $_POST['supporters'] ) );
		wp_die( "Änderungen gespeichert!" );
	}
}

add_action( 'wp_ajax_cwosSet', 'cwosSet' );
add_action( 'wp_ajax_nopriv_cwosSet', 'cwosSet' );


// Handle Form Request
function cwosHandleForm() {
	// Build Data
	header( 'Content-type: application/json' );
	$formdata = $_POST['formdata'];
	if ( $formdata && $formdata[4]["value"]) {
		http_response_code( 200 );
		$all_supporters = cwos_get_supporters( true );
		$newSupporter   = array(
			"done"   => "false",
			"name"   => $formdata[0]["value"],
			"street" => $formdata[1]["value"],
			"zip"    => $formdata[2]["value"],
			"city"   => $formdata[3]["value"]
		);

		if ( cwos_check_if_not_exist( $newSupporter, $all_supporters ) ) {
			// Update Array and Push it to DB
			array_push( $all_supporters, $newSupporter );
			update_option( 'cwo_supporters', json_encode( $all_supporters ) );
			send_cwos_notification($newSupporter["name"]);

			// Response
			$response = array(
				"success" => true,
				"message" => "Die Übertragung war erfolgreich, danke!"
			);
			echo json_encode( $response );
			wp_die();
		} else {
			$response = array(
				"success" => true,
				"message" => "Die Adresse wurde bereits registriert:)"
			);
		}
		echo json_encode( $response );
		wp_die();
	}
	else {
		http_response_code( 203 );
		$response = array(
			"success" => false,
			"message" => "Fehler beim übertragen der Daten."
		);
		echo json_encode( $response );
		wp_die();
	}

}

add_action( 'wp_ajax_cwosHandleForm', 'cwosHandleForm' );
add_action( 'wp_ajax_nopriv_cwosHandleForm', 'cwosHandleForm' );


// Check if Supporter doesent exist (Not Used currently)
function cwos_check_if_not_exist( $new, $all ) {
	foreach ( $all as $supporter ) {
		if ( $new["street"] === $supporter["street"] && $new["zip"] === $supporter["zip"] ) {
			return false;
		}
	}

	return true;
}

// Notifaction Mail
function send_cwos_notification($name) {
	$to = "tanja.blueflash@gmx.de";
	$subject = "Neuer SUO Supporter";
	$message = $name." hat sich als Supporter eingetragen";
	wp_mail($to,$subject,$message);
}