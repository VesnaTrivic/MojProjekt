<?php
class Home extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->helper(['form', 'url']);
        $this->load->model('model_users');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('home');
    }

    public function login(){
        $this->load->view('login');
    }

    public function register(){
        $this->load->view('register');
    }

    public function admin(){
        if($this->session->userdata('user_type')=="admin"){
            $this->load->view('admin');
        }else{
            echo "Error code: 403. Pristup je dozvoljen samo adminima.";
        }
    }

    public function reservation(){
        if($this->session->userdata('user_type')=="admin"){
            $this->load->view('reservation');
        }elseif($this->session->userdata('user_type')=="user"){
            $this->load->view('reservation');
        }else{
            $this->load->view('register');
        }
    }

    public function reservation1(){
        $this->load->view('reservation1');
    }

    public function contact(){
        $this->load->view('contact');
    }

    public function aboutUs(){
        $this->load->view('aboutUs');
    }

    public function search(){
        $this->load->view('search');
    }

    public function user_information(){
        $this->load->view('user_information');
    }

    public function login_validation(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Korisničko ime', 'required|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Lozinka', 'required|callback_validate_credentials');

        $checklogin = $this->model_users->can_log_in();

        if($checklogin){
            foreach($checklogin as $row);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('password', $row->password);
            $this->session->set_userdata('user_type', $row->user_type);

            if($this->session->userdata('user_type')=="admin"){
                redirect('home/admin');
            }elseif($this->session->userdata('user_type')=="user"){
                redirect('home/reservation');
            }
        }else{
            $data['error'] = "Korisničko ime ili lozinka nisu točni!";
            $this->load->view('login', $data);
        }
    }

    public function register_validation(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Korisničko ime', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('first_name', 'Ime', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Prezime', 'required|trim');
        $this->form_validation->set_rules('email', 'E-mail', 'required|trim|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Lozinka', 'required|trim|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('cpassword', 'Potvrda lozinke', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', 'Korisničko ime ili E-mail već postoji!');
        $this->form_validation->set_message('min_length', 'Lozinka mora imati najmanje 4 karaktera!');
        $this->form_validation->set_message('max_length', 'Lozinka mora imati najviše 16 karaktera!');
        $this->form_validation->set_message('matches', 'Potvrda lozinke se ne podudara sa lozinkom, pokušajte ponovo!');

        if($this->form_validation->run() == FALSE){
            $this->load->view('register');
        }else{
            $this->load->model('model_users');

            if($query = $this->model_users->create_member()){
                $this->load->view('reservation');
            }else{
                $this->load->view('register');
            }
        }
    }

    public function validate_credentials(){
        $this->load->model('model_users');

        if($this->model_users->can_login()){
            return true;
        }else{
            $this->form_validation->set_message('validate_credentials', 'Pogrešno korisničko ime i/ili lozinka');
            return false;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

}
?>