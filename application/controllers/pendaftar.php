<?php
     class Pendaftar extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $daftar = $this->db->get("pendaftar");

               $data["query"] = $daftar;
               $data["content"] = "pages/daftar_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $data["query"]= NULL;
               $data["content"]= "pages/daftar_form";
               $this->load->view("template", $data);
          }

          function hapus($id){
               $this->db->where(array('daftar_id' => $id))->delete('pendaftar');
               redirect ('pendaftar', 'refresh');

          }

          function edit($id){
               $daftar = $this->db->get_where("pendaftar",array('daftar_id' => $id));

               $data["query"] = $daftar;
               $data["content"] = "pages/daftar_edit";
               $this->load->view("template", $data);
          }

          function update($id){
               $data = array              
                    (
                         'no_ktp' => $this->input->post('daftar_no_ktp'),
                         'nama_lengkap' => $this->input->post('daftar_nama_lengkap'),
                         'tanggal_lahir' => $this->input->post('daftar_tanggal_lahir'),
                         'umur' => $this->input->post('daftar_umur')


                    );

               
               $this->db->where(array('daftar_id'=>$id))->update('pendaftar',$data);
               redirect ('pendaftar', 'refresh');

          }

          function simpan(){
               $data = array              
                    (
                         'no_ktp' => $this->input->post('daftar_no_ktp'),
                         'nama_lengkap' => $this->input->post('daftar_nama_lengkap'),
                         'tanggal_lahir' => $this->input->post('daftar_tanggal_lahir'),
                         'umur' => $this->input->post('daftar_umur')


                    );

               
               $this->db->insert('pendaftar' , $data);
               redirect ('pendaftar', 'refresh');



          }
     }
?>
