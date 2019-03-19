<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"> </script>
           <script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.js"></script>
           <script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.min.js"></script>
           <script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap-4.0.0-beta.3-dist.js"></script>
           <script src="jquery-3.2.1.min.js"></script>
            <script src="jquery-3.2.1.min.map.js"></script>

	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap-grid.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/reboot-min.css">
   
	</head>
	<body>
		<nav class="navbar navbar-expand-sm  bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="navbar-item "><a class="nav-link " href="lab1.php">Student</a></li>
				<li class="navbar-item"><a class="nav-link" href="lesson.php">Lesson</a></li>
			</ul>
		</nav>
		
			<?php


   $l[0]=array("hicheeliinner"=>"Algoritmiin vndes","indeks"=>"CSII200","bagts"=>"3");
   $l[1]=array("hicheeliinner"=>"CLanguage","indeks"=>"CSII201","bagts"=>"3");
   $l[2]=array("hicheeliinner"=>"Ogogdliin Sangiin vndes","indeks"=>"CSII202","bagts"=>"3");
   $l[3]=array("hicheeliinner"=>"internet tehnologiin vndes","indeks"=>"CSII203","bagts"=>"3");
   $l[4]=array("hicheeliinner"=>"Programchlaliin argazvi","indeks"=>"CSII204","bagts"=>"3");
   $l[5]=array("hicheeliinner"=>"Matematiclogic","indeks"=>"MATH182","bagts"=>"3");
   
    
     $k=count($l);
?>
<div class="container">
      <table class="table table-dark table-hover">
      	<thead>
         		<td>Хичээлийн нэр</td>
         		<td>Индекс</td>
         		<td>Багц цаг</td>
         		
         	</thead>
      <?php
          for($i=0;$i<$k;$i++){?>
        
         	
         	 <tr>
         	<tbody>
         	<td><?php echo $l[$i]['hicheeliinner']; ?></td>
             <td><?php echo $l[$i]['indeks']; ?></td>
             <td><?php echo $l[$i]['bagts']; ?></td>
             
          </tbody>
          </tr>
      <?php } ?>


      </table>
			
		</div>

		
         


		
	</body>
</html>


		
         


	
  