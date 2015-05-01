<div class="pure-menu adminnav" id="cssmenu">
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
	<center>
		<h4>Type keyword to search</h4>
		<?php echo form_open('student/search_keyword'); ?>
			 
			<select name="search_type" class="pure-input-rounded">		 
                                                <option selected value="name" name="name">Name</option>
                                                <option value="level" name="level">Level</option>
                                                <option value="specialization" name="specialization">Specialization</option>
            </select>
            <input class="pure-input-rounded" type="text" size="30" name="keyword"/>
			<input type="submit" class="pure-button" value="Begin"/>
		</form>
	</center>
</div>