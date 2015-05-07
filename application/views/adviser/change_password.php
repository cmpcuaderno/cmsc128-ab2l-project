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
<table class="pure-table pure-u">
    <div class="success">
        <?php
        if(!is_null($message)){
            echo $message."<br><br>";
        } ?>
    </div>

    <?php echo form_open('adviser/validate_password'); ?>
	<tr>
        <td>
            Current Password
	    </td>

        <td>
            <input type="password" name="opword" class="pure-input-rounded" size="30" />
            <?php echo form_error('opword');  ?>
        </td>
    </tr>
	<tr>
        <td>
            New Password
        </td>
        <td>
            <input type="password" name="npword1" size="30" class="pure-input-rounded" placeholder="min. of six(6) characters" />
            <?php echo form_error('npword1');  ?>
        </td>
    </tr>
    <tr>
        <td>
            Retype Password
        </td>
        <td>
            <input type="password" name="npword2" size="30" class="pure-input-rounded" placeholder="min. of six(6) characters" />
            <?php echo form_error('npword2');  ?>
	   </td>
    </tr>
	</table><br><br>
<input type="submit" value="Submit" class="pure-button" />
  </form>
  </center>
</div>
