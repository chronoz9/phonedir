<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Phonedir extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->_SetTitle('Phone Directory');
        // $this->_SetTemplate('template/main_template');
    }
    function index()
    {
        $this->load->view('form.php');
        // $this->_SetContentView('form.php');
        // $this->_Render();
    }
}
?>