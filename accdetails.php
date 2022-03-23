<?php 
include("connection.php");
?>
<head>
    <title>Account Details</title>
    <style>
        nav{
            float:right;
        }
        button{
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }
            button:hover{
                background-color: #6ab86e;
            }
        </style>
</head>
<body>
    <nav>
        
        <a href="adminpage.php"><button>Admin Homepage</button></a>
    </nav>
    <br>
<center> 
 <h1>Account Details</h1>
 <table width="80%" border="1" >
 <thead>
	<tr>
		<th>Name</th>
		<th>Email</th>
	
        <th>Accumulated Marks</th>
        <th>Restricted</th>
       
	</tr>
 </thead>
 <tbody>
 <?php 
 $count=1;
 $sel_query="select * from student;";
 $result = mysqli_query($conn,$sel_query);
 while($row = mysqli_fetch_assoc($result)){?>
	<tr>
		<td><center><?php echo $row['Name'];?></center></td>
		<td><?php echo $row['Email'];?></td>
		
        <td><center><?php echo $row['accumulatedMarks'];?></center></td>
        <td><center><?php echo $row['disable'];?></center></td>
       
	</tr>
 <?php $count++;}?>
 </tbody>
 </table></center>