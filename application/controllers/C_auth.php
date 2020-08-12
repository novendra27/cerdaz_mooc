<?php

class C_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->helper('generate');
    }

    public function viewRegister()
    {
        $data['title'] = "register";
        $this->load->view('template/header', $data);
        $this->load->view('client/register');
        $this->load->view('template/footer');
    }

    public function register()
    {
        $totalUser = $this->M_auth->numRows();

        $config = [
            [
                'field' => 'nama_depan',
                'label' => 'Nama Depan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'
                ]
            ],
            [
                'field' => 'nama_belakang',
                'label' => 'Nama Belakang',
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'
                ]
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'is_unique[tb_master_users.username]|required|max_length[12]|min_length[5]',
                'errors' => [
                    'is_unique'  => 'this username has been picked',
                    'required'   => 'Wajib diisi',
                    'max_length' => 'maksimal 12 karakter',
                    'min_length' => 'minimal 5 karakter'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]|max_length[25]',
                'errors' => [
                    'required'   => 'wajib diisi',
                    'min_length' => 'minimal 8 karakter',
                    'max_length' => 'maksimal 25 karakter'
                ]
            ],
            [
                'field' => 'password2',
                'label' => 'Password2',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'matches'  => "password tidak cocok",
                    'required' => "Wajib diisi"
                ]
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|is_unique[tb_master_users.email]',
                'errors' => [
                    'is_unique' => 'email sudah digunakan',
                    'required'  => 'Wajib diisi'
                ]
            ]

        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $this->viewRegister();
        } else {
            $data = [
                'id_user'           => generateUserId($totalUser),
                'nama_depan'        => $this->input->post("nama_depan"),
                'nama_belakang'     => $this->input->post("nama_belakang"),
                'username'          => $this->input->post("username"),
                'password'          => hash("sha256", $this->input->post('password')),
                'email'             => $this->input->post("email"),
                'user_role'         => $this->input->post("user_role"),
                'status_pengguna'   => 1,

            ];

            if ($this->M_auth->insert("tb_master_users", $data) == true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Sukses mendaftar, silahkan log in
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

                redirect(base_url('login'));
            }
        }
    }
}
