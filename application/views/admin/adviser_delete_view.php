
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
		<form name="myForm" onsubmit = "return checkEnum()">
		</div>
		Adviser to Delete:
		<input type = "text" name="enum" id="enum" placeholder="Insert Employee Number">
		<button type = "submit" value="Submit" onclick="checkEnum()">
		</div>
		</form>
	</div>

	<div>
		
	</div>
</body>

<script type = "text/javascript">
	function checkEnum(){
		var x = document.forms["myForm"]["enum"].value;
		var e = /^-?[0-9]+$/;

		if(x.length == 0 || x.length != 10 || !e.test(x)){
		alert("Please input Employee Number with 10 integer characters!");
		}
	}
</script>
