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
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {

    var $components = array('Session', 'Cookie');

    function beforeFilter() {
        $this->_setLanguage();
    }

    function _setLanguage() {

        if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
            $this->Session->write('Config.language', $this->Cookie->read('lang'));
        }
        else if (isset($this->params['language']) && ($this->params['language']
                 !=  $this->Session->read('Config.language'))) {

            $this->Session->write('Config.language', $this->params['language']);
            $this->Cookie->write('lang', $this->params['language'], false, '20 days');
        }
    }

    public function beforeRender() {
      $this->set(
          'twitterBootstrapCreateOptions', 
          array(
           'class'         => 'form-horizontal well',
           'inputDefaults' => array(
                               'div'     => array('class' => 'control-group'),
                               'label'   => array('class' => 'control-label'),
                               'error'   => array('attributes' => array(
                                                                   'wrap' => 'span',
                                                                   'class' => 'help-inline',
                                                                  )
                                            ),
                               'between' => '<div class="controls">',
                               'after'   => '</div>',
                               'format'  => array('before', 'label', 'between', 'input', 'error', 'after')
                              ),
          )
      );
      $this->set(
          'twitterBootstrapEndOptions',
          array(
              //'label' => __('Submit'),
              'class' => 'btn btn-primary',
              'div'   => array('class' => 'form-actions'),
          )
      );   

      $this->set('baseUrl', Router::url('/', true));
     
      
    }//end beforeRender()
}
