<html>
<head>

</head>
<body>

    <?php
    	$this->load->helper('form');
    	echo form_open('add_adviser');
    	$data = array(
                  'name'        => 'uname',
                  'id'          => 'uname',
                  'required'    => 'true',
                  'pattern'     => '^([A-Za-z0-9]*)$'
                );
                
       $data1 = array(
                  'name'        => 'pw',
                  'id'          => 'pw',
                  'required'    => 'true'
                );
        
        $data2 = array(
                  'name'        => 'first_name',
                  'id'          => 'first_name',
                  'required'    => 'true',
                  'pattern'     => '^([A-Z][a-z]*)$'
                );
                
    	$data3 = array(
                  'name'        => 'middle_name',
                  'id'          => 'middle_name',
                  'required'    => 'true',
                  'pattern'     => '^([A-Z][a-z]*)$'
                );
        
        $data4 = array(
                  'name'        => 'last_name',
                  'id'          => 'last_name',
                  'required'    => 'true',
                  'pattern'     => '^([A-Z][a-z]*)$'
                );
                
        $data5 = array(
                  'name'        => 'enum',
                  'id'          => 'enum',
                  'required'    => 'true',
                  
                );
                
    	$data6 = array(
                  'name'        => 'spec',
                  'id'          => 'spec',
                  'required'    => 'true'
                );
                
        $dat7 = array(
                  'name'        => 'lvl',
                  'id'          => 'lvl',
                  'required'    => 'true'
                );
    	

    echo '<fieldset>' . 'Basic Information';

    echo '<table>';
    echo '<tr>';
    echo '<td>';
    echo 'Username: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'Password: ';
    echo '</td>';
    echo '<td>';
    echo form_password($data1);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'First Name: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data2);
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo 'Middle Name: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data3);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'Last Name: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data4);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'Employee Number: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data5);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'Specialization: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data6);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo 'Level: ';
    echo '</td>';
    echo '<td>';
    echo form_input($data7);
    echo '</td>';
    echo '</tr>';
    
?></div>
 
    <div class="buttons">
    <input type="submit" name="submit" value="Submit" />
    </div>
</body>
</html>
