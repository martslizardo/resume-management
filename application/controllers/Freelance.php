<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freelance extends CI_Controller {

    
        public function index(){
            $data['freelance'] = $this->Resume_model->show_record(['record.pos_id'=>3,'record.current_status'=>'Active']);
            $title['title'] = "Astrid Technologies | New Applicant";
            $this->load->view('include/header',$title);
            $this->load->view('include/sidebar', $data);  
            $this->load->view('freelance/index', $data);
            $this->load->view('include/footer');
           
        }

        public function add_freelance(){
                
            $data['title'] = "Astrid Technologies | New Applicant";
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar', $data);
            $this->load->view('freelance/new');
            $this->load->view('include/footer');

        }

        public function addRecord(){
            $this->load->model('Resume_model');   
            $config['upload_path'] = "assets/uploads";
            $config['allowed_types'] = 'doc|pdf|docx|jpg|jpeg|png';
            $config['max_size'] = 2048;
      
            $this->load->library('upload', $config);
            $this->load->helper('encryption');
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $middle_name = $_POST['middle_name'];
            $home_address = $_POST['home_address'];
            $email_address = $_POST['email_address'];
            $role = $_POST['role'];
            $comment = $_POST['comment'];
            $phone_number = $_POST['phone_number'];
            $birth_date = $_POST['birth_date'];
            $degree = $_POST['degree'];
            $school = $_POST['school'];
            $current_status=$_POST['current_status'];
            
          
          
            $this->form_validation->set_rules('image_file','Image','callback_validate_images_file');
        
            if($this->form_validation->run()==FALSE){
              echo json_encode(validation_errors());
            }else{
              $insert_data=[
                'first_name' => clean_data(ucwords($first_name)),
                'last_name'  => clean_data(ucwords($last_name)),
                'middle_name' => clean_data(ucwords($middle_name)),
                'degree' => clean_data(ucwords($degree)) ,
                'role_id' => clean_data($this->input->post('role')), //java dev, rails dev etc.
                'pos_id' => 3,// employee, intern
                'email' => clean_data($email_address),
                'comment' => clean_data(ucwords($comment)),
                'home_address' => clean_data(ucwords($home_address)),
                'phone_number' => clean_data($phone_number),
                'birthday' => clean_data($birth_date),
                'school' => clean_data($school),
                'images'=> $this->session->image,
                'current_status' => clean_data($current_status)
                
              ];
      
              $last_inserted = $this->Resume_model->last_inserted_row('record',$insert_data);  
      
                echo json_encode('success'); 
            }
        }

        
    public function validate_images_file(){
        if (isset($_FILES['image_file']) && !empty($_FILES['image_file']['name'])) {
          if ($this->upload->do_upload('image_file')) {
            $this->session->image =  $this->upload->data('file_name');
            return true;
          } else {
            $this->form_validation->set_message('validate_images_file', $this->upload->display_errors());
            return false;
          }
        }


    }


    public function edit(){
            $this->load->helper('form');
            $id = $this->uri->segment(3);
            $data['applicant_data'] = $this->Resume_model->fetch_tag_row('*','record', ['id' => $id]);
            $title['title'] = "Astrid Technologies | New Applicant";
            $this->load->view('include/header',$title);
            $this->load->view('include/sidebar',$data);
            $this->load->view('freelance/edit', $data);
            $this->load->view('include/footer');     
    }

}


    