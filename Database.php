<?php 
  class Database {
      private $serverName = 'localhost';
      private $connectionInfo = array(
          "Database"=>"Prespol",
          "TrustServerCertificate" => "True"  //solusi tambahkan script ini, dan update odbc for sql versi > 17
      );
      private $connection;
  
      public function __construct(){
          $this->connection = sqlsrv_connect($this->serverName, $this->connectionInfo);
          // if ($this->connection === false){
          //     die('Koneksi Gagal');
          // }
          if ($this->connection === false) {
              echo "<pre>";
              die(print_r(sqlsrv_errors(), true)); // Jika gagal, tampilkan error
          } else {
              //echo "Koneksi ke database berhasil!";
          }
      }
  
  
      public function getConnection(){
          return $this->connection;
      }
  }
?>
