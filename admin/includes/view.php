<?php

function parseZCode($content) {
	// Parsage des balises
	$zcode = array(
		'`&lt;italique&gt;(.+)&lt;/italique&gt;`isU',
		'`&lt;gras&gt;(.+)&lt;/gras&gt;`isU',
		'`&lt;barre&gt;(.+)&lt;/barre&gt;`isU',
		'`&lt;lien&gt;(.+)&lt;/lien&gt;`isU',
		'`&lt;lien url=&quot;(.+)&quot;&gt;(.+)&lt;/lien&gt;`isU',
		'`&lt;image&gt;(.+)&lt;/image&gt;`isU',
	);


	$content = htmlspecialchars($content, ENT_QUOTES);


	// parsage des smilies
	$smiliesName = array(':magicien:', ':colere:', ':diable:', ':ange:', ':ninja:', '&gt;_&lt;', ':pirate:', ':zorro:', ':honte:', ':soleil:', ':\'\\(', ':waw:', ':\\)', ':D', ';\\)', ':p', ':lol:', ':euh:', ':\\(', ':o', ':colere2:', 'o_O', '\\^\\^', ':\\-°');
	$smiliesUrl  = array('magicien.png', 'angry.png', 'diable.png', 'ange.png', 'ninja.png', 'pinch.png', 'pirate.png', 'zorro.png', 'rouge.png', 'soleil.png', 'pleure.png', 'waw.png', 'smile.png', 'heureux.png', 'clin.png', 'langue.png', 'rire.gif', 'unsure.gif', 'triste.png', 'huh.png', 'mechant.png', 'blink.gif', 'hihi.png', 'siffle.png');
	$smiliesPath = "../images/smilies/";

	for ($i = 0, $c = count($smiliesName); $i < $c; $i++) {
		$content = preg_replace('`' . $smiliesName[$i] . '`isU', '<img src="' . $smiliesPath . $smiliesUrl[$i] . '" alt="smiley" />', $content);
	}

	// Rtours à la ligne
	$content = preg_replace('`\n`isU', '<br />', $content);

	return $content;

}

if (isset($_POST["string"])) {
	$content = $_POST["string"];

	if (get_magic_quotes_gpc()) {
		$content = stripslashes($content);
	}

	echo parseZCode($content); // Ecriture du contenu parsé.
}
?>
