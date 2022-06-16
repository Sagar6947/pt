<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (sessionId('admin_id') == "") {
            $this->load->view('admin/login');
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "Blogs";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $this->load->view('admin/blogs', $data);
    }

    public function banner()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Home Banner";
        $data['banner'] = $this->CommonModal->getAllRows('banner');
        $config['upload_path'] = base_url('uploads/banner');

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $no = rand();
            $folder = "./uploads/banner/";
            move_uploaded_file($_FILES["b_img"]["tmp_name"], "$folder" . $no . $_FILES["b_img"]["name"]);
            $file_name = $no . $_FILES["b_img"]["name"];
            $post['b_img'] =  $file_name;
            $savedata = $this->CommonModal->insertRowReturnId('banner', $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', 'Banner added Sucessfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
            }
            redirect(base_url('admin_Dashboard/banner'));
        } else {
            $this->load->view('admin/banner', $data);
        }
    }
    public function deletebanner($bid)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "banner";
        $data = $this->CommonModal->getRowById('banner', 'bid', $bid);
        print_r($data[0]['b_img']);
        if (file_exists("./uploads/banner/' . $data[0]['b_img']")) {
            unlink('./uploads/banner/' . $data[0]['b_img']);
        }

        if ($this->CommonModal->deleteRowById($table, array('bid' => $bid))) {

            $this->session->set_flashdata('msg', 'Banner Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Banner not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        redirect('admin_Dashboard/banner');
    }
    
    public function disable()
    {
        $id = $this->uri->segment(3);
        $table = $this->uri->segment(4);
        $status = $this->uri->segment(5);

        $data['favicon'] = base_url() . 'assets/images/favicon.png';

        if ($table == 'category') {
            $this->CommonModal->updateRowById($table, 'category_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_category'));
        }
        if ($table == 'sub_category') {
            $this->CommonModal->updateRowById($table, 'sub_category_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_subcategory'));
        }
        if ($table == 'promocode') {
            $this->CommonModal->updateRowById($table, 'pid', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/promocode'));
        }
        if ($table == 'products') {
            $this->CommonModal->updateRowById($table, 'product_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_products'));
        }
    }

    public function testimonials()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Testimonials  ";
        $data['testimonials'] = $this->CommonModal->getAllRows('testimonials');


        if (count($_POST) > 0) {

            $post = $this->input->post();
            
            $savedata = $this->CommonModal->insertRowReturnId('testimonials', $post);

            if ($savedata) {
                $this->session->set_userdata('msg', 'Testimonial Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/testimonials'));
        } else {
            $this->load->view('admin/testimonials', $data);
        }
    }
    public function deletetestimonials($tid)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "testimonials";
        $this->CommonModal->deleteRowById($table, array('tid' => $tid));
        redirect('admin_Dashboard/testimonials');
    }

    public function blogs()
    {
        $table = "tbl_team";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Blogs";
        $data['blogs'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/blogs', $data);
    }


    public function blogs_add()
    {
        $data['title'] = "Add Blogs ";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $this->load->view('admin/blogs_add', $data);
    }

    public function blogsadd()
    {
        $table = 'tbl_team';
        if (count($_POST) > 0) {
            print_r($_POST);

            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/blogs/');

            if ($this->Dashboard_model->insertdata($table, $post)) {

                $this->session->set_flashdata('msg', 'Blog Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('admin_Dashboard/blogs'));
        } else {
            redirect(base_url('admin_Dashboard/blogs'));
        }
    }

    public function editblogs()
    {
        $id = $this->uri->segment(3);
        // echo $id;
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit Blog";
        $data['blog'] = $this->CommonModal->getRowById('tbl_team', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $temp_image = $post['image'];
            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/blogs/');
                $post['image'] = $img;
                if ($temp_image != "") {
                    unlink('uploads/blogs/' . $temp_image);
                }
            }
            $update = $this->CommonModal->updateRowById('tbl_team', 'id', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'Blog Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/blogs'));
        } else {
            $this->load->view('admin/edit_blogs', $data);
        }
    }

    public function deleteblogs($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_team";

        $data = $this->CommonModal->getRowById('tbl_team', 'id', $id);
        if (file_exists("uploads/blogs/" . $data[0]['image'])) {
            unlink('uploads/blogs/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Blog Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Blog not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/blogs');
    }

    public function view_category()
    {
        $table = "tbl_category";
        $data['favicon'] = base_url() . 'assets/logo.png';
        $data['title'] = "Video Category";
        $data['category'] = $this->Dashboard_model->fetchall($table);
        $this->load->view('admin/view_category', $data);
    }


    public function add_category()
    {
        $data['title'] = "Add Product Main Category";
        $data['favicon'] = base_url() . 'assets/logo.png';
        $this->load->view('admin/add_category', $data);
    }

    public function addcategory()
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        if (isset($_POST['submit'])) {

            $cat_name = $this->input->post('cat_name');

            $file_name = imageUpload('image', 'uploads/category/');
            // $no = rand();
            // $folder = base_url() . "uploads/category/";
            // move_uploaded_file($_FILES["image"]["tmp_name"], "$folder" . $no . $_FILES["image"]["name"]);
            // $file_name = $no . $_FILES["image"]["name"];

            $table = "tbl_category";
            $data = array('cat_name' => $cat_name, 'image' => $file_name);

            if ($this->Dashboard_model->insertdata($table, $data)) {

                $this->session->set_flashdata('msg', 'Category Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('admin_Dashboard/view_category'));
        } else {
            redirect(base_url('admin_Dashboard/add_category'));
        }
    }



    public function edit_category($category_id = true)
    {
        
        $data['favicon'] = base_url() . 'assets/logo.png';
        $data['title'] = "Edit category";
        $data['categoryInfo'] = $this->Dashboard_model->get_category_Info($category_id);
        $this->load->view('admin/edit_category', $data);
    }

    public function editcategory()
    {
        $table = "tbl_category";
        $data['favicon'] = base_url() . 'assets/logo.png';
        if (isset($_POST['submit'])) {

            $id = $this->input->post('id');
            $cat_name = $this->input->post('cat_name');

            $no = rand();
            if ($_FILES["image"]["name"] == "") {
                $this->db->select("*");
                $this->db->where('category_id', $id);
                $query = $this->db->get($table);
                $result = $query->row();
                $file_name = $result->image;
            } else {
                $uploadfile = $_FILES["image"]["tmp_name"];
                $folder = "uploads/category/";
                move_uploaded_file($_FILES["image"]["tmp_name"], "$folder" . $no . $_FILES["image"]["name"]);
                $file_name = $no . $_FILES["image"]["name"];
            }
            $data = array('cat_name' => $cat_name, 'image' => $file_name);

            $update = $this->CommonModal->updateRowById($table, 'category_id', $id, $data);
            if ($update) {

                $this->session->set_flashdata('msg', 'Category Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Category Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }

            redirect(base_url() . 'admin_Dashboard/view_category');
        } else {
            redirect(base_url() . 'admin_Dashboard/edit_category');
        }
    }

    public function deletecategory($id)
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $table = "tbl_category";

        $data = $this->CommonModal->getRowById('tbl_category', 'category_id', $id);

        if (file_exists("./uploads/category/' . $data[0]['image']")) {
            unlink('./uploads/category/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('category_id' => $id))) {
            $this->session->set_flashdata('msg', 'Category Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Category not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/view_category');
    }

    public function view_products()
    {
        $data['favicon'] = base_url() . 'assets/logo.png';

        $data['title'] = "Videos";
        $data['products'] = $this->CommonModal->getAllRows('tbl_videos');

        $this->load->view('admin/view_products', $data);
    }

    public function add_products()
    {
        
        $data['title'] = "Add Video";
        $table = "tbl_category";
        $data['category'] = $this->Dashboard_model->fetchall($table);
        $this->load->view('admin/add_products', $data);
    }

    public function edit_products($product_id = true)
    {
        
        $data['title'] = "Edit Category";
        $data['productInfo'] = $this->Dashboard_model->get_productss($product_id);
        $data['category'] = $this->Dashboard_model->fetchall('tbl_category');
        $this->load->view('admin/edit_products', $data);
        //redirect('admin/edit_products', $data);
    }

    public function addproducts()
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
         
            $post = $this->input->post();
            $productId = $this->CommonModal->insertRowReturnId('tbl_videos', $post);
            $countImg = count($_FILES['img']);
            for ($i = 0; $i <= $countImg; $i++) {
                $no = rand();
                if (!empty($_FILES["img"]["name"][$i])) {
                    $folder = "uploads/products/";
                    move_uploaded_file($_FILES["img"]["tmp_name"][$i], "$folder" . $no . $_FILES["img"]["name"][$i]);
                    $file_name1 = $no . $_FILES["img"]["name"][$i];
                    $this->CommonModal->insertRowReturnId('products_image', array('product_id' => $productId, 'pi_name' => $file_name1));
                }
            }

            if ($productId) {
                $this->session->set_flashdata('msg', 'Product  Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url() . 'admin_Dashboard/view_products');
         
    }

    public function editproductdetails()
    {
        $table = "tbl_videos";
        $data['favicon'] = base_url() . 'assets/logo.png';
         

            $data = $this->input->post();
            // $pro_name = $this->input->post('pro_name');
            // $description = $this->input->post('description');
            // $category_id = $this->input->post('category_id');

            // $price = $this->input->post('price');
            // $old_price = $this->input->post('old_price');
            // $data = array('product_id' => $id, 'pro_name' => $pro_name, 'description' => $description, 'category_id' => $category_id, 'price' => $price, 'old_price' => $old_price);

            $update = $this->CommonModal->updateRowById($table, 'product_id', $data['product_id'], $data);
            if ($update) {
                $this->session->set_flashdata('msg', 'Video Update Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url() . 'admin_Dashboard/view_products');
         
    }

    public function deleteproducts($id)
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $table = "tbl_videos";
        $this->Dashboard_model->deleteproducts($table, $id);
        redirect('admin_Dashboard/view_products');
    }

    public function contact_query()
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $data['title'] = "Subscribers";
        $table = "tbl_subscribers";
        $data['subs'] = $this->CommonModal->getAllRows($table);
        $this->load->view('admin/contact', $data);
    }

    public function deletesubscriber($id)
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $table = "tbl_subscribers";
        $this->CommonModal->deleteRowById($table, array('sid' => $id));
        redirect('admin_Dashboard/contact_query');
    }

    public function franchise_query()
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $data['title'] = "Subscribers";
        $table = "tbl_franchise";
        $data['fran'] = $this->CommonModal->getAllRows($table);
        $this->load->view('admin/franchise', $data);
    }

    public function deletefranchise($id)
    {
        $data['favicon'] = base_url() . 'assets/logo.png';
        $table = "tbl_franchise";
        $this->CommonModal->deleteRowById($table, array('fid' => $id));
        redirect('admin_Dashboard/franchise_query');
    }
}
