<?php

/**
 * Trigger this file on Plugin uninstall
 *
 * @package  MeuPrimeiroPlugin
 */
namespace Inc\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}