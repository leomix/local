<?php
include 'spice.php';
function curl($link, $post){
    $post['spice'] = f3198hfh;
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
function getCurl($link,$token){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer ".$token)); 
    curl_setopt($ch, CURLOPT_URL, $link); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $response = curl_exec($ch); 
    curl_close($ch);
    return json_decode($response); 
}

function jwt_request($link,$token, $post) {

    $ch = curl_init($link); // Initialise cURL
    $post = json_encode($post); // Encode the data array into a JSON string
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    $result = curl_exec($ch); // Execute the cURL statement
    curl_close($ch); // Close the cURL connection
    return json_decode($result); // Return the received data

}
function getStatusPago($status){
    $results = ['No Pagado','Cargado a Banco','Pagado'];
    return $results[$status];
}