<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{
    public function get_slider_data()
    {
        $query = $this->db->query("SELECT * from tbl_slider ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_why_choose_us_data()
    {
        $query = $this->db->query("SELECT * from tbl_why_choose ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_why_choose_us_photo()
    {
        $query = $this->db->query("SELECT * from tbl_why_choose_photo WHERE id=1");
        return $query->result_array();
    }
    public function get_service_data()
    {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_portfolio_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_portfolio_data()
    {
        $query = $this->db->query("SELECT * from tbl_portfolio");
        return $query->result_array();
    }
    public function get_team_member_data()
    {
        $query = $this->db->query("SELECT * 
                                FROM tbl_team_member t1
                                JOIN tbl_designation t2
                                ON t1.designation_id = t2.designation_id
                                ORDER BY t1.id asc");
        return $query->result_array();
    }

    public function get_team_member_limit()
    {
        $query = $this->db->query("SELECT * 
                                FROM tbl_team_member t1
                                JOIN tbl_designation t2
                                ON t1.designation_id = t2.designation_id
                                ORDER BY t1.id limit 2");
        return $query->result_array();
    }

    public function get_team_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_designation');
        $this->db->where('designation_id', $id);
        $this->db->get()->row();
    }

    public function get_team_member($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_team_member');
        $this->db->join('tbl_designation', 'tbl_designation.designation_id = tbl_team_member.designation_id', 'left');
        $this->db->where('tbl_team_member.designation_id', $id);
        $this->db->get()->result();
    }

    public function get_testimonial_data()
    {
        $query = $this->db->query("SELECT * from tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_testimonial_photo()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial_photo WHERE id=1");
        return $query->result_array();
    }
    public function get_faq_data()
    {
        $sql = "SELECT * FROM tbl_faq WHERE faq_show=? OR faq_show=? ORDER BY faq_id ASC";
        $query = $this->db->query($sql, array('On Home Page', 'On Home and FAQ Page'));
        return $query->result_array();
    }
    public function get_faq_photo()
    {
        $query = $this->db->query("SELECT * FROM tbl_faq_photo WHERE id=1");
        return $query->result_array();
    }
    public function get_gallery_data()
    {
        $query = $this->db->query("SELECT * 
                        FROM tbl_photo
                        WHERE photo_show_home=?
                        ORDER BY photo_id ASC", array('Yes'));
        return $query->result_array();
    }
    public function get_partner_data()
    {
        $query = $this->db->query("SELECT * FROM tbl_partner ORDER BY id ASC");
        return $query->result_array();
    }
}
