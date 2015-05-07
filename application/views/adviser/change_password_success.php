<div class="pure-menu adminnav" id="cssmenu">
    <ul class="pure-menu-list custom-restricted-width">

        <li class="pure-menu-item">
            <a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="update">Update Specialization</a>
        </li>

        <li class="pure-menu-item pure-menu-selected">
            <a href="<?php echo site_url('adviser/change_password') ?>" class="pure-menu-link navLink" id="logs">Change Password</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('adviser/grad_advisees') ?>" class="pure-menu-link navLink" id="logs">View Graduate Advisees</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('adviser/advisees') ?>" class="pure-menu-link navLink" id="logs">View Advisees</a>
        </li>
    </ul>
</div>

<div class="body-panel">
<center>
Change password successful.<br><br>
<table class="pure-table pure-u">

	<tr><td>
   <?php echo form_open('student/validate_password'); ?>
    Current Password
	</td><td>
    <input type="password" name="opword" class="pure-input-rounded" size="30" /></td></tr>
	<tr><td>
    <?php echo form_error('opword');  ?><br/>
    New Password</td><td>
    <input type="password" name="npword1" size="30" class="pure-input-rounded" placeholder="min. of six(6) characters" /></td>
	</tr><tr><td>
    <?php echo form_error('npword1');  ?> <br/>
    Retype Password </td><td>
    <input type="password" name="npword2" size="30" class="pure-input-rounded" placeholder="min. of six(6) characters" />
	</td></tr>
    <?php echo form_error('npword2');  ?> <br/><br/>


	</td></tr>
	</table><br>
<input type="submit" value="Submit" class="pure-button" />
  </form>
  </center>
</div>
