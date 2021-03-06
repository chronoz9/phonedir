<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phone_model extends CI_Model
{
    function insertPhone($input)
    {
        $data = array(
            'name'      =>$input['uname'],
            'phone'     => $input['pnum'],
            'address'   =>$input['addr']
            );
        $this->db->insert('phonedir',$data);
        return $this->db->insert_id();
    }
    function getPhone($limit,$offset)
    {
        $query = $this->db->get('phonedir',$offset,$limit);
        $rows = $query->result();
        foreach($rows as $row)
        {
            $currnum = $row->phone;
            $arcode = substr($currnum, 0,3);
            $firstmain = substr($currnum,3,4);
            $secondmain = substr($currnum,7,4);
            $row->phone = "(".$arcode.") ".$firstmain.'-'.$secondmain;
        }
        return $rows;
    }
    function getTotalRow()
    {
        $query = $this->db->get('phonedir');
        $numrow = $query->num_rows();
        return $numrow;
    }
}
?>