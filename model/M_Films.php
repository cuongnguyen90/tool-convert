<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: May/3/20
 * Time: 17:45
 */

use function MongoDB\BSON\toJSON;

include 'DB/DBconnect.php';

class M_Films
{
   private $connect;

   public function __construct()
   {
      $conn = new DBconnect();
      $this->connect = $conn->connect();
   }



   public function getAll($fields)
   {
      $qerry = $fields ? $fields : '*';

      $sql = "SELECT $qerry FROM tb_films";
      $stmt = $this->connect->query($sql);
      $result = $stmt->fetchAll(\PDO::FETCH_OBJ);

      $arr = [];

      foreach ($result as $item) {
         array_push($arr, $item);
      }

      return json_encode($arr,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
   }
}