<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	
	
	/**
	 * Sets up successful session flash message for view.
	 * @param string $msg
	 * @param string $url
	 * @return bool exits
	 */
	function flashSuccess($msg, $url = null) {
		
		$this->Session->setFlash($msg, 'success');
		
		if (!empty($url))
		{
			$this->redirect($url, null, true);	
		}

	}
	
	
	/**
	 * Sets up warning session flash message for view.
	 * @param string $msg
	 * @param string $url
	 * @return bool exits
	 */
	function flashWarning($msg, $url = null) {
		
		$this->Session->setFlash($msg, 'warning');
		
		if (!empty($url))
		{
			$this->redirect($url, null, true);	
		}

	}
	
	
	/**
	 * checks for id; if no id, redirects to given action
	 * @param int $id
	 * @param string $url
	 * @return bool
	 */
	function idEmptyRedirect($id, $url = null) {
		
		if (empty($id)) {
			$this->flashWarning('Invalid Id', $url);
		}
	}
}
