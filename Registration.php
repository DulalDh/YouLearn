<?php
	if($_POST['insert'])
	{
		$first_name = $_POST['usr_frst_name'];
		$last_name = $_POST['usr_lst_name'];
		$email = $_POST['usr_email'];
		$Nid_no = $_POST['usr_nid'];
		$rlgn = $_POST['rlgn'];
		$gndr = $_POST['gndr'];
		$type = $_POST['type'];
		$Address = $_POST['usr_address'];
		$phone = $_POST['usr_phone'];
		$pwd = $_POST['pwd'];
		$cnfrm_pwd = $_POST['cnfrm_pwd'];
		$div = substr($email,-4);
		$fullname = $first_name." ".$last_name;
		function Insert($fullname,$email,$Nid_no,$Address,$rlgn,$gndr,$type,$picture,$phone,$pwd)
		{
			$con = mysqli_connect("localhost","root","","software_project");
			if(!$con)
			{
				die("Databse not connected: ".mysqli_connect_error);
			}
			else
			{
				if($_POST['type']=="Mentor")
				{
					$query="INSERT INTO login(Id,Email,Password,Type) VALUES ('','$email','$pwd','Mentor')";
					mysqli_query($con,$query);
					
					$sql = "INSERT INTO mentor_info(Id,Name,Email,Nid_No,Address,rlgn,gndr,type,phone,password) VALUES('','$fullname','$email',$Nid_no,'$Address','$rlgn','$gndr','Mentor',$phone,'$pwd')";
					if(mysqli_query($con,$sql))
					{
						mail($email,'registration','Congratulations!!!Your Profile is ready for use as a mentor.Go to the site and add your child','from:YouLearn');
						echo '<script language="javascript">';
						echo 'alert("Successfully Registered"); 
						location.href="YouLearn.html"';
						echo '</script>';
					}
				}
				else if($_POST['type']=="Tutor")
				{
					$query="INSERT INTO login(Id,Email,Password,Type) VALUES ('','$email','$pwd','Tutor')";
					mysqli_query($con,$query);
					$command = "INSERT INTO tutor(Id,Email,Class_num_1,Class_num_1,Class_num_1) VALUES('','$email','','','')";
					mysqli_query($con,$command);
					$sql = "INSERT INTO tutor_info(Id,Name,Email,Nid_No,Address,rlgn,gndr,type,phone,password) VALUES ('','$fullname','$email',$Nid_no,'$Address','$rlgn','$gndr','Tutor',$phone,'$pwd')";
					if(mysqli_query($con,$sql))
					{
						mail($email,'registration','Congratulations!!!Your Request for Tutor in YouLearn has been accepted.You can now use our dashboard','from:YouLearn');						
						echo '<script language="javascript">';
						echo 'alert("Successfully Registered"); 
						location.href="YouLearn.html"';
						echo '</script>';
					}
				}
			}
			mysqli_close($con);
		}
		if($first_name!=""||$last_name!=""||$email!=""||$Nid_no!=""||$rlgn!=""||$gndr!=""||$type!=""||$phone!=""||$pwd!=""||$cnfrm_pwd!="")
		{
			if(strlen($phone)==11)
			{
				if($pwd == $cnfrm_pwd)
				{
					if($div == ".com")
					{
						for($i=0;$i<strlen($first_name);$i++)
						{
							if((ord($first_name[$i])>=65 && ord($first_name[$i])<=90) || (ord($first_name[$i])>=97 && ord($first_name[$i])<=122))
							{
								for($i=0;$i<strlen($last_name);$i++)
								{
									if((ord($last_name[$i])>=65 && ord($last_name[$i])<=90) || (ord($last_name[$i])>=97 && ord($last_name[$i])<=122))
									{
										for($i=0;$i<strlen($Nid_no);$i++)
										{
											if((ord($Nid_no[$i])>=48 && ord($Nid_no[$i])<=57))
											{
												$nid = $Nid_no;
											}
											else
											{
												echo '<script language="javascript">';
												echo 'alert("Nid must contain only digit");
												location.href="Registration.html"';
												echo '</script>';
											}
										}
									}
									else
									{
										echo '<script language="javascript">';
										echo 'alert("Name must contain only letters");
										location.href="Registration.html"';
										echo '</script>';
									}
								}
							}
							else
							{
								echo '<script language="javascript">';
								echo 'alert("first Name must contain only letters");
								location.href="Registration.html"';
								echo '</script>';
							}	
						}
						Insert($fullname,$email,$Nid_no,$Address,$rlgn,$gndr,$type,$phone,$pwd);
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Mail Must be valid");
						location.href="Registration.html"';
						echo '</script>';
					}
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Password doesnot match");
					location.href="Registration.html"';
					echo '</script>';
				}
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Mobille num must be valid");
				location.href="Registration.html"';
				echo '</script>';
			}
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Field Cant be empty");
			location.href="Registration.html"';
			echo '</script>';
		}
	}
?>