<?php
    class Job  {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllJobs(){
            $this->db->query("SELECT jobs.*, categories.name AS cname
                            FROM jobs
                            INNER JOIN categories
                            ON jobs.category_id = categories.id
                            ORDER BY post_date DESC
                             ");

            $results = $this->db->resultSet();
            return $results;
        }

        public function getByCategory($category){
            $this->db->query("SELECT jobs.*, categories.name AS cname
                            FROM jobs
                            INNER JOIN categories
                            ON jobs.category_id = categories.id
                            WHERE jobs.category_id = $category
                            ORDER BY post_date DESC
                             ");

            $results = $this->db->resultSet();
            return $results;

        }
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id= :category_id");
            $this->db->bind(':category_id', $category_id);

            $row = $this->db->single();
            return $row;

        }

         
        public function categories(){
            $this->db->query("SELECT * FROM categories ");

            $results = $this->db->resultSet();
            return $results;
        }

        public function getJob($id){
        
            $this->db->query("SELECT * FROM categories WHERE id= :id");
            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;
        }
    }