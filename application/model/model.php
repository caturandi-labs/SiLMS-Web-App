<?php

class Model
{
    /**
     * @param object $db adalah koneksi database
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Koneksi Database Gagal, Hubungi Admin.');
        }
    }
}
