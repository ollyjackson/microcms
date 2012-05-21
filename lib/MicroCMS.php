<?php
class MicroCMS
{
	public static function init()
	{
		if (!is_readable("config.xml")) {
			die("config.xml does not exist");
		}

		$configxml = simplexml_load_file("config.xml");

		foreach ($configxml->pages->page as $page) {
			if ($_GET['p'] == $page->attributes()->url) {
				echo MicroCMS::render($page->attributes()->url);
			}
		}
	}

	public static function render($url)
	{
		echo 'mooooo';
	}
}