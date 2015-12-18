<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2015
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

class Lex_parser_controller extends Base_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->parser();

        $this->template
            ->title('Lex Parser Test')
        ;

        $this->registry->set('nav', 'playground/lex');
    }

    public function index() {

        $php_min = '5.3';

        if (!is_php($php_min)) {

            $this->output->set_output('PHP '.$php_min.' is required for Lex parser.');
            return;
        }

        $this->template
            ->set('name', 'John')
            ->enable_parser_body('lex')
            ->build('lex_parser.lex.html');
    }

}
