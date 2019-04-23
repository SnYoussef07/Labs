<?php

get_header();

get_template_part("templates/headerServices");

?>

<img src="<?php echo get_template_directory_uri(); ?>/img/mapMolen.png" alt="">




<?php

function getXmlCoordsFromAdress($address)
{
    $coords = array();
    $base_url = "http://maps.googleapis.com/maps/api/geocode/xml?";
// ajouter &region=FR si ambiguité (lieu de la requete pris par défaut)
    $request_url = $base_url . "address=" . urlencode($address) . '&sensor=false';
    $xml = simplexml_load_file($request_url) or die("url not loading");
//print_r($xml);
    $coords['lat'] = $coords['lon'] = '';
    $coords['status'] = $xml->status;
    if ($coords['status'] == 'OK') {
        $coords['lat'] = $xml->result->geometry->location->lat;
        $coords['lon'] = $xml->result->geometry->location->lng;
    }
    return $coords;
}


get_template_part("templates/mapGeek");
get_template_part("templates/contactForm");

$test = getXmlCoordsFromAdress("22 rue rambuteau, 75003 PARIS, france");
echo "hi";
echo $test['lat'];

get_footer();
