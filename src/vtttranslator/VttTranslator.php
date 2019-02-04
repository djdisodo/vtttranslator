<?php
namespace vtttranslator {
	require_once("vendor\\autoload.php");

	use function is_dir;
	use function is_file;
	use Podlove\Webvtt\Parser;
	use function scandir;
	use function substr;

	foreach (scandir(".") as $item) {
		if (!is_file($item)) continue;
		if (substr($item, -6) != "en.vtt") continue;
		echo PHP_EOL . $item;
		Translator::translate("en", "ko", $item);
	}
}