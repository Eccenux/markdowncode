<?php
function t($text, $replacements = array()) {
	if (!empty($replacements)) {
		$text = strtr($text, $replacements);
	}
	return $text;
}

include 'markdowncode.module';

echo _filter_markdowncode_tips('', true);

?>
