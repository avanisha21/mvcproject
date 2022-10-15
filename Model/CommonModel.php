<?php 
class CommonModel {
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','post');
		// if(isset($this->conn))
		// {
		// 	echo "connected";
		// }
		// else
		// {
		// 	echo "Not";
		// }
		
	}
	function select($tbl)
	{
		$sql="select * from $tbl";
		$run=$this->conn->query($sql);
		if($run->num_rows>0)
		{
			while($r=$run->fetch_object())
			{
				$row[]=$r;
			}
		}
		
		
		return $row;
	}
	function select_where($d,$tbl)
	{
		foreach($d as $keys=>$value)
		{
			$k[]="`".$keys."`='".$value."'";

		}
		$kk=implode(" and ",$k);

		$sql="select * from $tbl where $kk";
		
		$run=$this->conn->query($sql);
		if($run->num_rows>0)
		{
			foreach($run as $r)
			{
				$row=$r;
			}

			return $row;
		}

	}
	// function delete_emp_data($id)
	// {
	// 	//print_r($id);
	// 	foreach($id as $id=>$d)
	// 	{
	// 		echo $id;
	// 	}
	// 	$sql="delete from employee where ".$id."=".$d;
	// 	$run=$this->conn->query($sql);
		
	// }
	function insert_data($d,$tbl)
	{
		foreach($d as $keys=>$value)
		{
			$k[]=$keys;
			$v[]=$value;
		}
		$kk=implode("`,`",$k);
		$vv=implode("','",$v);
		
		$sql="Insert into $tbl (`$kk`) values('$vv')";
		

		$this->conn->query($sql);
		
	}
	
	// function edit_where($id)
	// {
	// 	$sql="select * from employee where em_id=".$id;
	// 	$run=$this->conn->query($sql);
	// 	if($run->num_rows>0)
	// 	{
	// 		while($r=$run->fetch_object())
	// 		{
	// 			$row[]=$r;
	// 		}
	// 	}
	// 	return $row;

	// }
	// function update_emp_data($d,$i)
	
	// {
	// 	foreach($d as $keys=>$value)
	// 	{
	// 		$k[]=$keys.'='."'".$value."'";
	// 		$v[]=$value;
	// 	}
	// 	$kk=implode(",",$k);
	// 	$vv=implode("','",$v);
		
	// 	$sql="update employee set ";
	// 	$sql .=$kk." where em_id=".$i;
	// 	$run=$this->conn->query($sql);
	// }
}

?>