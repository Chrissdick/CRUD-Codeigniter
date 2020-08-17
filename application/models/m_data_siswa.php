<?php

    class m_data_siswa extends CI_model 
    {
        // model mengambil data dari database
        public function get_data($table)
        {
            return $this->db->get($table)->result();
        }

        // memasukkan data ke dalam database
        public function insert($table,$data)
        {
            $this->db->insert($table,$data);
        }

        // fungsi untuk menghapus data
        public function delete($id,$column,$table)
        {
            $this->db->where($column,$id);
            $this->db->delete($table);
        }
        
        // mengedit data
        public function edit($table,$column,$data,$id)
        {
            $this->db->where($column,$id);
            $this->db->update($table,$data);
        }


        // ambil data per id
        public function get_edit($table,$column,$id)
        {
            return $this->db->get_where($table,[$column => $id])->result();

        }
    }


?>