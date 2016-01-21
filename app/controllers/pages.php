<?php
/**
 * Pages controller
 * 
 * Displays pages
 * 
 * @author Artem Daniliants
 * @license http://www.gnu.org/licenses/gpl-3.0.en.html
 * @copyright 2016 LumoSpark OÜ All Rights Reserved
 */

namespace Controllers;

/**
 * Pages class
 * 
 * Displays pages using template files
 */
class Pages {
	
	/**
	 * Display index page
	 * 
	 * Simply displays index.html template :)
	 */
	function index(\Base $app, $params) {
		$app->set('page.content', $app->get('pages.index_content'));
		$app->set('page.title', $app->get('pages.index_title'));
		echo \Template::instance()->render('index.html');
	}
}