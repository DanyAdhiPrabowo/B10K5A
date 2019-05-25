<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

class Biodata
{
	
	public function cetak($name, $address, $hobbies, $is_married, $school, $skills){
		$data 	= [
					'name'		=> $name, 
					'address'	=> $address, 
					'hobbies'	=> $hobbies, 
					'is_married'=> $is_married, 
					'school'	=> $school, 
					'skills' 	=>$skills
				  ];
		return json_encode($data);
	}
}


		$name  			= "Dany Adhi Prabowo";
		$address  		= "jln. sofyan efendy no.21, rt 02, dusun 1 jajaran baru, kec.megang sakti, kab.musi Rawas, Sumatera Selatan";
		$hobbies  		= ["coding","futsal" ,"gaming"];
		$is_married  	= false;
		$school  		= ["highSchool"=>"SMA Negeri Megang Sakti", "University" => "University Muhammadiyah Bengkulu"];
		$skills  		= [
							["Name"=>"HTML","Score"=>"90%"],
							["Name"=>"CSS3","Score"=>"80%"],
							["Name"=>"Javascript","Score"=>"60%"],
							["Name"=>"PHP","Score"=>"75%"],
							["Name"=>"Bootstrap 4","Score"=>"78%"],
							["Name"=>"Codeigniter 3","Score"=>"70%"]
						  ];

		$bio 				= new Biodata();
		echo $bio->cetak($name, $address, $hobbies, $is_married, $school, $skills);

 ?>
</body>
</html>