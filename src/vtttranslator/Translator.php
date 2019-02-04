<?php
namespace vtttranslator;
use Podlove\Webvtt\Parser;
use Statickidz\GoogleTranslate;

class Translator /*extends Thread*/ {
	private $from;
	private $to;
	private $file;
	public function __construct(string $from, string $to, string $file) {
		$this->from = $from;
		$this->to = $to;
		$this->file = $file;
	}
	public function getFrom(): string {
		return $this->from;
	}
	public function getTo() : string {
		return $this->to;
	}
	public function getFile() : string {
		return $this->file;
	}
	public function setGarbage() {
	}
	public static function translate(string $from, string $to, string $file) : void {
		$data = (new Parser())->parse(file_get_contents($file));
		$contents = 'WEBVTT';
		foreach ($data['cues'] as $cue) {
			$contents .= str_repeat(PHP_EOL, 2);
			$contents .= $cue["start"] . " --> " . $cue["end"];
			$contents .= PHP_EOL;
			if (!empty($cue["voice"])) {
				$contents .= "<v " . $cue["voice"] . ">";
			}
			$contents .= GoogleTranslate::translate($from, $to, $cue["text"]);
		}
		file_put_contents($file, $contents);
	}
}