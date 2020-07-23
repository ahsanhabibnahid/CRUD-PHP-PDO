<?php
include "Main.php";
	class Student extends Main{
		
		protected $table = "tbl_student";
		private $name;
		private $department;
		private $age;

		public function setName($name){
			$this->name = $name;
		}
		public function setDepartment($department){
			$this->department = $department;
		}
		public function setAge($age){
			$this->age = $age;
		}

		public function insert(){
			$sql = "insert into $this->table (name, department, age) values(:name, :department, :age)";
			$stml = DB::prepare($sql);
			$stml -> bindParam(":name",$this->name);
			$stml -> bindParam(":department",$this->department);
			$stml -> bindParam(":age",$this->age);
			return $stml -> execute();
		}


		public function update($id){
			$sql = "update $this->table set name=:name, department=:department, age=:age where id=:id";
			$stml = DB::prepare($sql);
			$stml -> bindParam(":id",$id);
			$stml -> bindParam(":name",$this->name);
			$stml -> bindParam(":department",$this->department);
			$stml -> bindParam(":age",$this->age);
			return $stml -> execute();
		}

		
	}

?>