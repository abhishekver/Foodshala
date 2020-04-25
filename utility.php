<?php	
	function debug_to_console($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);

		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}

	function insert_Restaurant ($name , $mail , $pass){
		include 'connection.php';
		try {
			$sqlquery="INSERT INTO Restaurant (Rest_Name , Rest_Mail , Rest_Pass)
				VALUES ('".$name."' , '".$mail."' , '".$pass."')";

			$conn->exec($sqlquery);
			return true ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
        }
	}


	function insert_Customer ($name , $mail , $phone ,  $add , $pref , $pass){
		include 'connection.php';
		try {
			$sqlquery='INSERT INTO Customer (Cust_Name , Cust_Mail , Cust_Phone , Cust_Add , Cust_Pref , Cust_Pass )
				VALUES ("'.$name.'" , "'.$mail.'" , "'.$phone.'" ,  "'.$add.'" , "'.$pref.'" , "'.$pass.'" )';
			// echo $sqlquery;
			$conn->exec($sqlquery);
			// echo "Success";
			return true ;
        }
        catch (PDOException $e) {
			echo $e;
            return false ;
        }
	}
	

	function insert_Menu ($name , $pref , $cost, $desc){
		include 'connection.php';
		try {			
			$food_id = -1;
			$sqlquery = "Select food_id from Menu where food_name='".$name."' and food_pref='".$pref."'";	
			$result = $conn->query($sqlquery)->fetch();
			if($result)
				$food_id = $result[0];
			
			if($food_id == -1)	{
				
				$sqlquery='INSERT INTO Menu (Food_Name , Food_Pref, Food_Desc )
					VALUES ("'.$name.'" , "'.$pref.'", "'.$desc.'" )';
				$conn->exec($sqlquery);

				$sqlquery = "Select food_id from Menu where food_name='".$name."' and food_pref='".$pref."'";	
				$result = $conn->query($sqlquery)->fetch();
				
				if($result)
					$food_id = $result[0];
			}

			$sqlquery='INSERT INTO Rest_Menu (rest_id, food_cost, food_id)
			VALUES ("'.$_SESSION['rest_id'].'" , "'.$cost.'" , "'.$food_id.'")';
			$conn->exec($sqlquery);			

			return true ;
        }
        catch (PDOException $e) {
			echo $e;
            return false ;
        }
	}
	

	function login($email, $pass, $user)	{
		include 'connection.php';
		try {
			if($user === 'Restaurant')	{
				$sqlquery = "Select rest_name, rest_id from Restaurant where rest_mail='".$email."' and rest_pass='".$pass."'";
				$result = $conn->query($sqlquery)->fetch();
				$_SESSION['name'] = $result[0];
				$_SESSION['rest_id'] = $result[1];
				if($result)
					return true;
				return false;
			}
			else {
				$sqlquery = "Select cust_name, cust_id from Customer where cust_mail='".$email."' and cust_pass='".$pass."'";
				$result = $conn->query($sqlquery)->fetch();
				$_SESSION['name'] = $result[0];
				$_SESSION['cust_id'] = $result[1];
				if($result)
					return true;
				return false;
			}
			
        }
        catch (Exception $e) {
			echo $e;
            return false ;
        }
	}


	function getAllMenu()	{
		include 'connection.php';
		try {
			$sqlquery = "Select * from Menu";
			
			$result = $conn->query($sqlquery)->fetchAll();
			
			return $result ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
        }
	}



	function getFoodInfo($food_id)	{
		include 'connection.php';
		try {
			$sqlquery = "Select * from Menu where food_id=".$food_id;
			
			$result = $conn->query($sqlquery)->fetch();
						
			return $result ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
        }
	}
	


	function getAllRes($food_id)	{
		include 'connection.php';
		try {
			$sqlquery = "Select rest_menu_id, Rest_Menu.rest_id, rest_name, food_cost from Rest_Menu inner join Restaurant
				on Rest_Menu.rest_id = Restaurant.rest_id where food_id=".$food_id;
			
			$result = $conn->query($sqlquery)->fetchAll();
			return $result ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
        }
	}

	function getCustomers($rest_id)	{
		include 'connection.php';
		try {
			$sqlquery = "Select DISTINCT Customer.cust_id, cust_name from Orders inner join Customer on 
					Orders.cust_id = Customer.cust_id where rest_id=".$rest_id;

			$result = $conn->query($sqlquery)->fetchAll();
			return $result ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
		}
	}

	function getResCusOrders($rest_id, $cust_id)	{
		include 'connection.php';
		try {
			$sqlquery = "Select food_name from Orders inner join Menu on 
					Orders.food_id = Menu.food_id where rest_id=".$rest_id." and cust_id=".$cust_id;
			
			$result = $conn->query($sqlquery)->fetchAll();
			return $result ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
		}	
	}



	function addToOrder($cust_id, $rest_id, $food_id)	{
		include 'connection.php';
		try {
			$sqlquery="INSERT INTO Orders (Cust_Id , Rest_id , Food_id)
				VALUES ('".$cust_id."' , '".$rest_id."' , '".$food_id."')";

			$conn->exec($sqlquery);
			return true ;
        }
        catch (PDOException $e) {
			echo $e;
			return false ;
        }
	}

?> 