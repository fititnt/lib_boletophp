<?php

/*
 * @package         JBoletophp
 * @author          Emerson Rocha Luiz
 * @version         1.0RC
 * @copyright       Copyright (C) 2011 Webdesign Assessoria em Tecniligia da Informacao. All rights reserved.
 * @license         GNU General Public License version 2. See license.txt
 * 
 */
defined('JPATH_PLATFORM') or die;

abstract class JBoletophp {

	/**
	 * LibxampleSubpackage Object
	 * @var object 
	 */
	public static $boletophp = null;

	/**
	 * Esta classe ainda não funciona. Os modos de acesso ao PHP boleto devem
	 * ser os mesmos que são sugeridos pelo desenvolvedor deste
	 * 
	 * @todo implementar de um modo "mais JPlatform" (fititnt, 2012-02-19 00:25)
	 * 
	 * Return boletophp Object, creating if aready doesent exists
	 */
	public static function getBoletophp() {
		if (!self::$boletophp) {
			jimport('boletophp.boletophp.load');

			self::$boletophp = LoadBoletophp::getInstance();
		}
		return self::$boletophp;
	}

}
