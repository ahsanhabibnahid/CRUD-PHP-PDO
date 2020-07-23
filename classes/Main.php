<?php
	include "DB.php";


	abstract class Main {
		protected $table;

		abstract public function insert();
		abstract public function update($id);

		public function readByID($id){

			$sql = "select * from $this->table where id=:id";
			$stml = DB::prepare($sql);
			$stml -> bindParam(":id",$id);
			$stml -> execute();
			return $stml -> fetch();

		}


		public function readAll(){
			 $sql = "select * from $this->table";
			 $stml = DB::prepare($sql);
			 $stml -> execute();
			 return $stml -> fetchAll();
		}

		public function delete($id){
			$sql = "delete from $this->table where id=:id";
			$stml = DB::prepare($sql);
			$stml -> bindParam(":id",$id);
			return $stml -> execute();
		}
	}

?>