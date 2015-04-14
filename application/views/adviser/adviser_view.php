	<div class="adminprofile">
		<div class="pure-menu adminnav">
        <ul class="pure-menu-list custom-restricted-width">

			<li class="pure-menu-item pure-menu-selected">
                <a href="#" class="pure-menu-link navLink" id="prof">Profile</a>
            </li>

			<li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="under">Undergraduate Advisees</a>
            </li>

			<li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="grad">Graduate Advisees</a>
            </li>

            <li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="search">Search Students</a>
            </li>

        </ul>
		</div>

		<!-- para maupdate ng adviser yung profile niya. di ko sure, kung kailangan to. paki ayos nalang. salamat. -Emman -->
		<a href="adviser/edit">Edit</a>

		<div class="pure-g container profile prof">
			<div class="pure-u-1-3 l-box"><p>Name:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $adviser['last_name'] .", ".$adviser['first_name'] . " " .$adviser['middle_name']?></p></div>
			<div class="pure-u-1-3 l-box"><p>Employee Number:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $adviser['employee_number']?></p></div>
			<div class="pure-u-1-3 l-box"><p>Specialization:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $adviser['specialization'] ?></p></div>
			<div class="pure-u-1-3 l-box"><p>Academic Rank:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $adviser['level'] ?></p></div>
		</div>

		<div class="pure-g container undergraduate under">
			<div class="pure-u-1-3 l-box"><p>Name:</p></div>
			<div class="pure-u-2-3 l-box"><p>John Doe</p></div>
			<div class="pure-u-1-3 l-box"><p>Employee Number:</p></div>
			<div class="pure-u-2-3 l-box"><p>2009-12345</p></div>
		</div>

		<div class="pure-g container graduate grad">
			GRADUATE
		</div>

		<div class="pure-g container searchstud search">
			SEARCH
		</div>
	</div>
</body>

<script type="text/javascript">
  	$(document).ready(function(){
  		$(".container").hide();
  		$(".profile").show();

  		$(".navLink").click(function(){
  			var div = $(this).attr('id');

  			$(".container").hide();
  			$("."+div).show(300);
  		});
  	});
  </script>