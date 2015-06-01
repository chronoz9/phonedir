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
    }
    function index()
    {
        $limit = 10;
        $offset = 0;
        $param = $this->input->get();
        if(isset($param['show']))
            $limit = $param['show'];
        if(isset($param['from']))
            $offset = $param['from'];
        $rows = $this->dbGetPhone($limit,$offset);
        $data['rows'] = $rows;
        $this->load->view('dir.php',$data);
    }
    function form()
    {
        $this->load->view('form.php');
    }
    function postForm()
    {
        $isvalid = $this->checkForm();
        if($isvalid)
        {
            $input = $this->input->post();
            $res = $this->dbPostPhone($input);
            if($res > 0)
            {
                //add success message
                redirect('phonedir');
            }
        }
    }
    protected function checkForm()
    {
        $config = array(
                array('field'=>'uname','label'=>'name','rules'=>'trim|required|max_length[256]|alpha_numeric_spaces'),
                array('field'=>'pnum','label'=>'phone number','rules'=>'trim|required|numeric|exact_length[11]')
            );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run()==false)
        {
            $this->form();
        }
        else
        {   
            return true;
        }
    }
    protected function dbPostPhone($input)
    {
        $this->load->model('phone_model','phdb');
        $res = $this->phdb->insert_phone($input);
        return $res;
    }
    protected function dbGetPhone($limit,$offset)
    {
        $this->load->model('phone_model','phdb');
        $res = $this->phdb->get_phone($offset,$limit);
        return $res;
    }
}
?>