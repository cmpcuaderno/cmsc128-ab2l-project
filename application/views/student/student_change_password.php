<div class="pure-menu adminnav">
    <ul class="pure-menu-list custom-restricted-width">
      
        <li class="pure-menu-item pure-menu-selected">
            <a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
        </li>
      
        <li class="pure-menu-item pure-menu">
            <a href="<?php echo site_url('student/grades') ?>" class="pure-menu-link navLink" id="add">View Grades</a>
        </li>
        
        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/change') ?>" class="pure-menu-link navLink" id="update">Change Password</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
        </li>

    </ul>
</div>


<div class="body-panel">


   <?php echo form_open('student/validate_password'); ?>
    Current Password
    <input type="password" name="opword"  size="30" />
    <?php echo form_error('opword');  ?><br/>
    New Password
    <input type="password" name="npword1" size="30" />
    <?php echo form_error('npword1');  ?> <br/>
    Retype Password
    <input type="password" name="npword2" size="30" />
    <?php echo form_error('npword2');  ?> <br/><br/>
   
    <input type="submit" value="Submit" />

  </form>
</div>
