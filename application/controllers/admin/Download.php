<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Model_header');
        $this->load->model('admin/Model_download');
    }

    public function index()
    {
        $header['setting'] = $this->Model_header->get_setting_data();

        $data['download'] = $this->Model_download->show();

        $this->load->view('admin/view_header', $header);
        $this->load->view('admin/view_download', $data);
        $this->load->view('admin/view_footer');
    }

    public function add()
    {
        $header['setting'] = $this->Model_header->get_setting_data();

        $data['error'] = '';
        $data['success'] = '';

        if (isset($_POST['form1'])) {

            $valid = 1;

            $path = $_FILES['photo']['name'];
            $path_tmp = $_FILES['photo']['tmp_name'];

            if ($path != '') {
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $file_name = basename($path, '.' . $ext);
                $ext_check = $this->Model_header->extension_check_photo($ext);
                if ($ext_check == FALSE) {
                    $valid = 0;
                    $data['error'] = 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
                }
            } else {
                $valid = 0;
                $data['error'] = 'You must have to select a photo for featured photo<br>';
            }

            if ($valid == 1) {

                $next_id = $this->Model_download->get_auto_increment_id();
                foreach ($next_id as $row) {
                    $ai_id = $row['Auto_increment'];
                }

                $final_name = 'download-' . $ai_id . '.' . $ext;
                move_uploaded_file($path_tmp, './public/uploads/' . $final_name);

                $form_data = array(
                    'photo'        => $final_name,
                    'heading'      => $_POST['heading'],
                    'content'      => $_POST['content'],
                    'button1_text' => $_POST['button1_text'],
                    'button1_url'  => $_POST['button1_url'],
                    'button2_text' => $_POST['button2_text'],
                    'button2_url'  => $_POST['button2_url']
                );
                $this->Model_download->add($form_data);

                $data['success'] = 'File is uploaded successfully!';
            }

            $this->load->view('admin/view_header', $header);
            $this->load->view('admin/view_download_add', $data);
            $this->load->view('admin/view_footer');
        } else {

            $this->load->view('admin/view_header', $header);
            $this->load->view('admin/view_download_add', $data);
            $this->load->view('admin/view_footer');
        }
    }


    public function edit($id)
    {

        // If there is no slider in this id, then redirect
        $tot = $this->Model_download->download_check($id);
        if (!$tot) {
            redirect(base_url() . 'admin/download');
            exit;
        }

        $header['setting'] = $this->Model_header->get_setting_data();
        $data['error'] = '';
        $data['success'] = '';
        $error = '';


        if (isset($_POST['form1'])) {

            $valid = 1;

            $path = $_FILES['photo']['name'];
            $path_tmp = $_FILES['photo']['tmp_name'];

            if ($path != '') {
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $file_name = basename($path, '.' . $ext);
                $ext_check = $this->Model_header->extension_check_photo($ext);
                if ($ext_check == FALSE) {
                    $valid = 0;
                    $data['error'] = 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
                }
            }

            if ($valid == 1) {
                $data['download'] = $this->Model_download->getData($id);

                if ($path == '') {
                    $form_data = array(
                        'heading'      => $_POST['heading'],
                        'content'      => $_POST['content'],
                        'button1_text' => $_POST['button1_text'],
                        'button1_url'  => $_POST['button1_url'],
                        'button2_text' => $_POST['button2_text'],
                        'button2_url'  => $_POST['button2_url']
                    );
                    $this->Model_download->update($id, $form_data);
                } else {
                    unlink('./public/uploads/' . $data['download']['photo']);

                    $final_name = 'download-' . $id . '.' . $ext;
                    move_uploaded_file($path_tmp, './public/uploads/' . $final_name);

                    $form_data = array(
                        'photo'        => $final_name,
                        'heading'      => $_POST['heading'],
                        'content'      => $_POST['content'],
                        'button1_text' => $_POST['button1_text'],
                        'button1_url'  => $_POST['button1_url'],
                        'button2_text' => $_POST['button2_text'],
                        'button2_url'  => $_POST['button2_url']
                    );
                    $this->Model_download->update($id, $form_data);
                }

                $data['success'] = 'Download is updated successfully';
            }

            $data['download'] = $this->Model_download->getData($id);
            $this->load->view('admin/view_header', $header);
            $this->load->view('admin/view_download_edit', $data);
            $this->load->view('admin/view_footer');
        } else {
            $data['download'] = $this->Model_download->getData($id);
            $this->load->view('admin/view_header', $header);
            $this->load->view('admin/view_download_edit', $data);
            $this->load->view('admin/view_footer');
        }
    }


    public function delete($id)
    {
        // If there is no slider in this id, then redirect
        $tot = $this->Model_download->download_check($id);
        if (!$tot) {
            redirect(base_url() . 'admin/download');
            exit;
        }

        $data['download'] = $this->Model_download->getData($id);
        if ($data['download']) {
            unlink('./public/uploads/' . $data['download']['photo']);
        }

        $this->Model_download->delete($id);
        redirect(base_url() . 'admin/download');
    }
}
