<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

/**
 * Description of RestGet
 *
 * @author http://roytuts.com
 */
class RestGetController extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ContactModel', 'cm');
    }

    function contacts_get() {
        $contacts = $this->cm->get_contact_list();

        if ($contacts) {
            $this->response($contacts, 200);
        } else {
            $this->response(NULL, 404);
        }
    }

    function contact_get() {
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        }

        $contact = $this->cm->get_contact($this->get('id'));

        if ($contact) {
            $this->response($contact, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }

    function add_contact_post() {
        $contact_name = $this->post('contact_name');
        $contact_address = $this->post('contact_address');
        $contact_phone = $this->post('contact_phone');
        
        $result = $this->cm->add_contact($contact_name, $contact_address, $contact_phone);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

    function update_contact_put() {
        $contact_id = $this->put('contact_id');
        $contact_name = $this->put('contact_name');
        $contact_address = $this->put('contact_address');
        $contact_phone = $this->put('contact_phone');
 
        $result = $this->cm->update_contact($contact_id, $contact_name, $contact_address, $contact_phone);
 
        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

}