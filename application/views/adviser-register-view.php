<!DOCTYPE html>
<html lang="en">
    <head>
<!--         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    </head>

    <body>
        <div class="container">
            <?php $this->load->helper("form"); echo form_open("Adviser/do_register"); ?>
                <label for="username">User Name</label>
                    <input type="text" name="username"/>
                <label for="password">Password</label>
                    <input type="password" name="password"/>
                <label for="employee_number">Employee Number</label>
                    <input type="text" name="employee_number"/>
                <label for="first_name">First Name</label>
                    <input type="text" name="first_name"/>
                <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name"/>
                <label for="last_name">Last Name</label>
                    <input type="text" name="last_name"/>
                <label for="specialization">Specialization</label>
                    <input type="text" name="specialization"/>
                <label for="level">Level</label>
                    <input type="text" name="level"/>
                <input type="submit" value="Sign up" name="register"/>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
