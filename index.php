<!DOCTYPE html>
<html>
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
            $conn = mysqli_connect("localhost","root","student");
            if($conn-> connect_error){
                die("connection failed". $conn->connect_error);
            }
            $sql="SELECT * FROM student";
            $result = $conn -> query($sql); // error was here resolved now
            if($result ->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>". $row["student_id"] . "</td><td>". $row["student_name"]."</td><td>".$row["GPA"]."</td><td>".$row["picture"]."</td><td>";
                
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
