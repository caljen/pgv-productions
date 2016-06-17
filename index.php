<?php 
	function Redirect($url, $permanent = false)
	{
		header('Location: ' . $url, true, $permanent ? 301 : 302);
		exit();
	}
	Redirect('page/home.php', false);
?>
<!DOCTYPE html>
<head>
<title>PGV Productions</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="PGV Productions: delivering original music productions to you, through the wire." />
<meta name="keywords" content="harmony melody rythm rhyme, pgv, positively good vibes, pgv productions, pgv music, caliboy calwayne, caliboy, calwayne, road construction, cali free styles, reason and emotion, progressive hip hop, alternative hip hop, music production, studio recording, online songs, online music, digital music"/>
<meta property="og:title" content="PGV Productions" />
<meta property="og:type" content="company" />
<meta property="og:url" content="http://pgvproductions.com" />
<meta property="og:image" content="http://pgvproductions.com/assets/images/pgv-fb-logo-with-tagline.png" />
<meta property="og:description" content="PGV Productions: delivering original music productions to you, through the wire." />
<meta property="og:site_name" content="PGV Productions" />
<meta property="fb:admins" content="1289742754" />

</head>
<body>
</body>
</html>

