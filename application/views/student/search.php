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
			<a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
		</li>
	  
	</ul>
</div>
<div class="body-panel">			
	<h4>Type keyword to search</h4>
	<?php echo form_open('student/search_keyword'); ?>

	<input  type="text" size="30" name="keyword" placeholder="Enter name, level or specialization"/>

	<input type="submit" value="Begin"/>
	</form>
			
</div>