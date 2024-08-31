<h1>Hands-on2-3a<h1>
    <?php
    $table = array(
        "header"=>array(
        "StudentId",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Course",
            "Yearlevel"
        ),
    
        "body"=>array(
           array(
            "Firstname"=>"Janna mel",
            "Middlename"=>"Rinon",
            "Lastname"=>"Bongon",
            "Section"=>"104",
            "Course"=>"Criminology",
            "Yearlevel"=> "3"
        ),
        array(

            "Firstname"=>"Andrei",
            "Middlename"=>"Magbanua",
            "Lastname"=>"Martin",
            "Section"=>"3a",
            "Course"=>"BSIT",
            "Yearlevel"=> "3"
        ),
        array(

            "Firstname"=>"Oswald",
            "Middlename"=>"barquillo",
            "Lastname"=>"Yap",
            "Section"=>"3a",
            "Course"=>"BSIT",
            "Yearlevel"=> "3"
        ),
        array(

            "Firstname"=>"Regiemon",
            "Middlename"=>"Arellano",
            "Lastname"=>"Marcelo",
            "Section"=>"3a",
            "Course"=>"BSIT",
            "Yearlevel"=> "3"
        ),
        array(

            "Firstname"=>"jeorge",
            "Middlename"=>"garcia",
            "Lastname"=>"reyes",
            "Section"=>"3a",
            "Course"=>"BSIT",
            "Yearlevel"=> "3"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        ),
        array(

            "Firstname"=>"joshua",
            "Middlename"=>"Middlename",
            "Lastname"=>"Lastname",
            "Section"=>"Section",
            "Course"=>"Course",
            "Yearlevel"=> "Yearlevel"
        )
    
        )   
        );


?>

<table border="1">
    <thead>
        <?php foreach($table["header"] as $header):?>
            <th><?php echo $header; ?></th>
        <?php endforeach; ?>

</thead>   
<tbody> 
 <?php for($i = 0; $i <= count($table["body"]) -1; $i++){
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$table["body"][$i]["Firstname"]."</td>";
        echo "<td>".$table["body"][$i]["Middlename"]."</td>";
        echo "<td>".$table["body"][$i]["Lastname"]."</td>";
        echo "<td>".$table["body"][$i]["Section"]."</td>";
        echo "<td>".$table["body"][$i]["Course"]."</td>";
        echo "<td>".$table["body"][$i]["Yearlevel"]."</td>";
        echo "</tr>";
     }
     ?>
    </tr>
    </tbody>
    </table>        




        
        
        
        
       
        
    


