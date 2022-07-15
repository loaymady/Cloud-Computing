<!DOCTYPE html>
<html>
<h1>Hello Dr.Elkholy</h1>
<h4>Attempting MySQL connection from php...</h4>
<head>
      <title>project cloud </title>
      <style type="text/css">
      table{
          border-collapse:collapse;
          width:100%;
          color: #d96459 ;
          font-family: monospace;
          font-size  : 25px;
          text-align :left ;
      }
      </style>
     
  </head>
  <body>
        <table>
            <tr>
                <th>student_ID</th>
                <th>student_name</th>
                <th>GPA</th>
                <th>picture</th>
            </tr>
            <?php 
            $host = 'mysql';
            $user = 'root';
            $pass = 'rootpassword';
	    $dbname = 'student';
            $conn = new mysqli($host, $user, $pass, $dbname);

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected to MySQL successfully!";
            $sql="SELECT * FROM students";
            $result = $conn -> query($sql); // error was here resolved now
            if($result ->num_rows>0){
                while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['student_id'] . "</td>";
			echo "<td>" . $row['student_name'] . "</td>";
			echo "<td>" . $row['GPA'] . "</td>";
			echo "<td>" . '<img src="C:\photo\2.jpeg;base64,'.base64_encode( $row['picture'] ).'"/>' . "<td>";			
			echo "</tr>";              
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn-> close();
            ?>
        </table>
    </body>

</html>
