<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /// BEGIN META RELATED
    protected function _SetTitle ( $text )
    {
        $this->title = $text ;
    }

    protected function _SetDescription ( $text )
    {
        $this->description = $text ;
    }
    /// END META RELATED
    // protected function _Render ( )
    // {
    //     $this->template->write ( 'title', $this->title ) ;

    //     $this->template->render ( ) ;
    // }
   
    // protected function _SetTemplate ( $template )
    // {
    //     $this->template->set_master_template ( $template ) ;
    // }

    // protected function _SetContent ( $content )
    // {
    //     $this->template->write ( 'content', $content ) ;
    // }
    // protected function _SetContentView ( $view, $data = null )
    // {
    //     $dir = "";
    //     // Add predefined global variable here as necessary
    //     $flashdata = array();
    //     if(isset($_SESSION['err_msg']))
    //         $flashdata['err_msg'] = $_SESSION['err_msg'];
    //     $data['flashdata'] = $flashdata;
    //     $data['opcities'] = $this->getAllOpCity();
    //     if($this->session->has_userdata('accdata'))
    //         $data['userprofdata'] = $this->session->userdata('accdata');
    //         // $this->template->write_view ( 'content', $dir.$view, $data ) ;
    //     $this->template->write_view ( 'content', $dir.$view, $data ) ;

    //     $this->_UnsetSession('err_msg');
    // }
}
?>