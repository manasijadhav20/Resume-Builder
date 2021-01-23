<html>
<head>
    <style>

form{
background-color: #C0C0C0;
opacity: 1;
padding: 10px;
 margin: 0;
 margin-left: 250px;
 margin-right: 250px;
 padding: 2em 0;
 border: 2px double;
text-align: center;

}
.footerright
{
    color: white;
}

a
{
    color: white;
}

body
{
    background-image: url(images/intro-bg.jpg);
}
</style></head> 
<script>

    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
<?php
$id=$name=$address=$phone=$email=$objective=$Education1=$Education2=$Education3=$skill1=$skill2=$skill3=$github=$linkedin="";

$link=mysqli_connect("localhost","root","","resumedb") or die("Error " . mysqli_error($link));

    // $name= $_POST["name"];
     $id=1;
    
    $query="SELECT * FROM personal,education,skills,projects,llink where id='$id'";
    
    $name_query=mysqli_query($link,"SELECT name FROM personal where id='$id'");
    $name_array=mysqli_fetch_assoc($name_query);
    $name=$name_array['name'];

    $address_query=mysqli_query($link,"SELECT address FROM personal where id='$id'");
    $address_array=mysqli_fetch_assoc($address_query);
    $address=$address_array['address'];

    $phone_query=mysqli_query($link,"SELECT phone FROM personal where id='$id'");
    $phone_array=mysqli_fetch_assoc($phone_query);
    $phone=$phone_array['phone'];

    $email_query=mysqli_query($link,"SELECT email FROM personal where id='$id'");
    $email_array=mysqli_fetch_assoc($email_query);
    $email=$email_array['email'];

    $objective_query=mysqli_query($link,"SELECT objective FROM personal where id='$id'");
    $objective_array=mysqli_fetch_assoc($objective_query);
    $objective=$objective_array['objective'];

    $Education1_query=mysqli_query($link,"SELECT Education1 FROM education ");
    $Education1_array=mysqli_fetch_assoc($Education1_query);
    $Education1=$Education1_array['Education1'];

    $Education2_query=mysqli_query($link,"SELECT Education2 FROM education");
    $Education2_array=mysqli_fetch_assoc($Education2_query);
    $Education2=$Education2_array['Education2'];

    $Education3_query=mysqli_query($link,"SELECT Education3 FROM education ");
    $Education3_array=mysqli_fetch_assoc($Education3_query);
    $Education3=$Education3_array['Education3'];

    $skill1_query=mysqli_query($link,"SELECT skill1 FROM skills ");
    $skill1_array=mysqli_fetch_assoc($skill1_query);
    $skill1=$skill1_array['skill1'];

    $skill2_query=mysqli_query($link,"SELECT skill2 FROM skills ");
    $skill2_array=mysqli_fetch_assoc($skill2_query);
    $skill2=$skill2_array['skill2'];

    $skill3_query=mysqli_query($link,"SELECT skill3 FROM skills ");
    $skill3_array=mysqli_fetch_assoc($skill3_query);
    $skill3=$skill3_array['skill3'];

    $skill4_query=mysqli_query($link,"SELECT skill4 FROM skills ");
    $skill4_array=mysqli_fetch_assoc($skill4_query);
    $skill4=$skill4_array['skill4'];

    $project1_query=mysqli_query($link,"SELECT project1 FROM projects ");
    $project1_array=mysqli_fetch_assoc($project1_query);
    $project1=$project1_array['project1'];

    $project2_query=mysqli_query($link,"SELECT project2 FROM projects ");
    $project2_array=mysqli_fetch_assoc($project2_query);
    $project2=$project2_array['project2'];

    $project3_query=mysqli_query($link,"SELECT project3 FROM projects ");
    $project3_array=mysqli_fetch_assoc($project3_query);
    $project3=$project3_array['project3'];

    $github_query=mysqli_query($link,"SELECT github FROM llink ");
    $github_array=mysqli_fetch_assoc($github_query);
    $github=$github_array['github'];

    $linkedin_query=mysqli_query($link,"SELECT linkedin FROM llink ");
    $linkedin_array=mysqli_fetch_assoc($linkedin_query);
    $linkedin=$linkedin_array['linkedin'];


        if(!mysqli_query($link,$query)){
        die('Error: ' . mysqli_error($link));
    }
    ?>
<center>
    <form>
    <?php
echo "<div id='printableArea'>";
echo "<div class='personal'>";
        echo "<h3>Resume</h3>";
        echo "<table class='personaldetails'>";
        echo "<tr> <th><u>Personal</u></th></tr>";
        echo "<tr> <th>Full Name</th> <td>:</td> <td>$name</td> </tr>";
        echo "<tr> <th>Address</th> <td>:</td> <td>$address</td> </tr>";
        echo "<tr> <th>Phone no.</th> <td>:</td> <td>$phone</td> </tr>";
        echo "<tr> <th>Email Id</th> <td>:</td> <td> $email</td> </tr>";
        echo "<tr> <th>Career Objective</th><td>:</td> <td>$objective</td> </tr>";
        echo "<tr> <th></th></tr>";

        echo "<tr> <th><u>Education</u></th></tr>";
        echo "<tr> <th>Education1</th> <td>:</td> <td>$Education1</td> </tr>";
        echo "<tr> <th>Education2</th> <td>:</td> <td>$Education2</td> </tr>";
        echo "<tr> <th>Education3</th> <td>:</td> <td>$Education3</td> </tr>";
        echo "<tr> <th></th></tr>";

        echo "<tr> <th><u>Skills</u></th></tr>";
        echo "<tr> <th>Language1</th> <td>:</td> <td>$skill1</td> </tr>";
        echo "<tr> <th>Language2</th> <td>:</td> <td>$skill2</td> </tr>";
        echo "<tr> <th>Language3</th> <td>:</td> <td>$skill3</td> </tr>";
        echo "<tr> <th>Language4</th> <td>:</td> <td>$skill4</td> </tr>";
        echo "<tr> <th></th></tr>";

        echo "<tr> <th><u>Projects</u></th></tr>";
        echo "<tr> <th>Project1</th> <td>:</td> <td>$project1</td> </tr>";
        echo "<tr> <th>Project2</th> <td>:</td> <td>$project2</td> </tr>";
        echo "<tr> <th>Project3</th> <td>:</td> <td>$project3</td> </tr>";
        echo "<tr> <th></th></tr>";

        echo "<tr> <th><u>Links</u></th></tr>";
        echo "<tr> <th>Github</th> <td>:</td> <td>$github</td> </tr>";
        echo "<tr> <th>Linkedin</th> <td>:</td> <td>$linkedin</td> </tr>";

        echo "</table>";
    echo "</div>";
    echo "</div>";
    ?>
</center>
<input type="button" onclick="printDiv('printableArea')" value="Print Your Resume" />
    <?php
    echo "<div class='footerright'>";
        echo "<br><label>Date&nbsp;&nbsp;:&nbsp;</label>". date("d/m/Y");
        echo "<br>Place&nbsp;:&nbsp; Mumbai";
    echo "</div>";
    echo "<div class='footerright'>";
        echo "<b>$name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
    echo "</div>";    
?>
   <p>
    <a href="login-page.html">Go Back</a>
    </p>   
</form>
</html>

