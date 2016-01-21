<?php
/**
 * Spark helper
 * 
 * Includes functions like logging etc
 * 
 * @author Artem Daniliants
 * @license http://www.gnu.org/licenses/gpl-3.0.en.html
 * @copyright 2016 LumoSpark OÜ All Rights Reserved
 */

use Log;
use DebugBar\StandardDebugBar;

/**
 * Spark helper class
 */
class Spark extends \Prefab{
    
    /**
     * F3 application object
     */
    private $app;
    
    /**
     * Logger object used for logging events
     */
    private $logger;
    
    /**
     * PHP debug bar object
     * 
     * @see http://phpdebugbar.com/
     */
    private $debugbar;
    
    /**
     * PHP debug bar object
     * 
     * @see http://phpdebugbar.com/
     */
    public $debugbarRenderer;

    /**
     * Log either to PHPdebugbar or file
     */
    public function log($message){
        if ($this->app->get('DEBUG')>0)
            $this->debugbar["messages"]->addMessage($message);
        else
            $this->logger->write($message);
    }
    
    /**
     * Initialize logger or phpdebugbar objects
     */
    public function __construct($app){
        $this->app = $app;
        
        if ($this->app->get('DEBUG')>0){
            $this->debugbar = new StandardDebugBar();
            $this->debugbarRenderer = $this->debugbar->getJavascriptRenderer();
            $this->app->set('debugbar', $this->debugbarRenderer);
            $this->debugbar["messages"]->addMessage("Debug enabled");
        }
        else {
            $this->logger = new \Log('application.log');
        }
    }
}