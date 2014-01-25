<?php
/**
 * StateableHelper
 *
 * PHP 5
 *
 * Copyright 2013, Jad Bitar (http://jadb.io)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2013, Jad Bitar (http://jadb.io)
 * @link          http://github.com/gourmet/common
 * @since         0.1.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppHelper', 'View/Helper');

/**
 * Stateable helper
 *
 * @package       Common.Helper
 */
class StateableHelper extends AppHelper {

	public function select($model, $field) {
		$Model = ClassRegistry::init($model);

		debug($Model->Behaviors->Stateable->settings[$Model->alias]['fields']);
	}

}
