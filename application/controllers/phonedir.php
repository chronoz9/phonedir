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
        if(isset($param['limit']) && $param['limit']>0)
            $limit = $param['limit'];
        if(isset($param['skip']))
            $offset = $param['skip'];
        $numrows = $this->getTotalRow();
        $rows = $this->dbGetPhone($limit,$offset);
        $nextlink = '#';
        $prevlink = '#';
        $nextskip = (($offset/$limit)+1)*$limit;
        $prevskip = (($offset/$limit)-1)*$limit;
        if($nextskip < $numrows)
            $nextlink = base_url().'phonedir?skip='.$nextskip.'&limit='.$limit;
        if($prevskip >=0)
            $prevlink = base_url().'phonedir?skip='.$prevskip.'&limit='.$limit;
        $data['rows'] = $rows;
        $data['prevlink'] = $prevlink;
        $data['nextlink'] = $nextlink;
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
        $res = $this->phdb->insertPhone($input);
        return $res;
    }
    protected function dbGetPhone($limit,$offset)
    {
        $this->load->model('phone_model','phdb');
        $res = $this->phdb->getPhone($offset,$limit);
        return $res;
    }
    protected function getTotalRow()
    {
        $this->load->model('phone_model','phdb');
        $res = $this->phdb->getTotalRow();
        return $res;
    }
}
?>