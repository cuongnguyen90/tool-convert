<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: May/3/20
 * Time: 17:46
 */


include 'model/M_Films.php';


class C_Films
{
   private $films;

   public function __construct()
   {
      $this->films = new M_Films();

   }

   public function allFilms($fields)
   {
      return $this->films->getAll($fields);
   }
}