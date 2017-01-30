<?php 

class Messages_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_messages($slug = FALSE)
        {
        
                if ($slug === FALSE)
                {
                        $query = $this->db->get('messages');
                        return $query->result_array();
                }

                $query = $this->db->get_where('messages', array('slug' => $slug));
                return $query->row_array();
         }


        public function set_messages()
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'message' => $this->input->post('message')
            );

            return $this->db->insert('message', $data);
        }




        // public function get_messages() {
        //    $this->db->from($this->data);    
        //   }

        //   function add_message($data) {
        //     $this->db->insert('data', $data);
        //     return;
        //   }


        //   function delete_row() {
        //     $this->db->where('id');
        //     $this->db->delete('data');
        // }
       

}