<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run('Role') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'role' => $this->input->post('role')
            ];
            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function delete($id)
    {
        $this->load->model('Delete_model');
        $this->Delete_model->deleteDataRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted!</div>');
        redirect('admin/role');
    }




    public function change($id)
    {
        $this->load->model('Delete_model');
        $data['title'] = 'Change Role Name';
        $data['mahasiswa'] = $this->Delete_model->getRoleById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/change', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Delete_model->changeDataRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role name chaged</div>');
            redirect('admin/role');
        }
    }


    public function userManagement()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('user', 'User', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/usermanagement', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu added</div>');
            redirect('menu/submenu');
        }
    }

    public function deleted($id)
    {
        $this->load->model('Delete_model');
        $this->Delete_model->deleteDataUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted!</div>');
        redirect('admin/usermanagement');
    }



    public function userChanges($id)
    {
        $this->load->model('Usermanagement_model');
        $data['title'] = 'Change User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userM'] = $this->Usermanagement_model->getSubMenuById($id);

        $data['userN'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/user-changes', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->Usermanagement_model->changeDataUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Changed</div>');
            redirect('admin/usermanagement');
        }
    }


    public function userToken()
    {
        $data['title'] = 'User Token';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['token'] = $this->db->get('user_token')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-token', $data);
        $this->load->view('templates/footer');
    }


    public function deleteToken($id)
    {
        $this->load->model('Delete_model');
        $this->Delete_model->deleteDataToken($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Token deleted!</div>');
        redirect('admin/usertoken');
    }
}
