<?php


include 'config.php';


class DBconnect
{
   private static $conn = null;

   public function connect()
   {

      try {

         self::$conn = new PDO(HOST, USER, PASS);

      } catch (PDOException $exception) {
         die($exception->getMessage());
      }

      return self::$conn;
   }
}