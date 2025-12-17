<?php
// $ip = $_SERVER['REMOTE_ADDR'];
// $url = "http://ip-api.com/php/{$ip}";

// $response = file_get_contents($url);
// $data = @unserialize($response);

// if ($data && $data['countryCode'] === 'PK' || $data && $data['countryCode'] === 'IN') {
//     header("Location: /denied.php");
//     exit;
// }
?>
<!doctype html>
<html lang="en">
<head>
<base href="https://ebookghostwriting.services/">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<?php include 'includes/utils/links.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "eBook Ghostwriting Services",
  "alternateName": "eBook Ghostwriting Services",
  "url": "https://ebookghostwriting.services/",
  "logo": "https://ebookghostwriting.services/assets/images/logo.webp",
  "sameAs": [
    "https://www.facebook.com/ebookghostwritingservices/",
    "https://x.com/eBook__writers",
    "https://www.pinterest.com/ebookghostwritingservices/",
    "https://www.linkedin.com/company/ebook-ghostwriting-services/"
  ]
}
</script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4DCBGWD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $ch = curl_init('http://ipwho.is/'.$ip);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $ipwhois = json_decode(curl_exec($ch), true);
    curl_close($ch);
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $clickid = explode('&',$actual_link);
    // var_dump($ipwhois);
?>
<?php include 'includes/utils/addons.php'; ?>
<?php include 'includes/shared/navbar.php'; ?>
