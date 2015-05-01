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
			<a class="toggle" id="hideFirstSem">
				<svg width="822" height="67">
					<!-- semester header -->
					<rect width="820" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="1"  rx="5" ry="5"/>
					<text x="300" y="40" fill="black" font-family="serif" font-size="20">1st semester A.Y. 2012-2013</text>
				<!-- if browser does not support svg -->
				Sorry, your browser does not support inline SVG.
				</svg>
			</a>

			<div id="firstsem" class="initHide">
				<svg width="822" height="67">
					<!-- subjects header -->
					<rect id="initHide" width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="1"  rx="5" ry="5"/>
					<text id="initHide"  x="20" y="40" fill="black" font-family="serif" font-size="20">MATH 17</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="140"  rx="5" ry="5"/>
					<text id="initHide" x="151" y="40" fill="black" font-family="serif" font-size="20">ENG 1(AH)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="280"  rx="5" ry="5"/>
					<text id="initHide"  x="303" y="40" fill="black" font-family="serif" font-size="20">GE (SSP)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="420"  rx="5" ry="5"/>
					<text id="initHide"  x="443" y="40" fill="black" font-family="serif" font-size="20">GE (SSP)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="560"  rx="5" ry="5"/>
					<text id="initHide"  x="578" y="40" fill="black" font-family="serif" font-size="20">GE (MST)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="701"  rx="5" ry="5"/>
					<text id="initHide"  x="738" y="40" fill="black" font-family="serif" font-size="20">PE 1</text>
					<!-- grades header -->
				<!-- if browser does not support svg -->
				Sorry, your browser does not support inline SVG.
				</svg>
			</div>

			<a class="toggle" id="hideSecondSem">
				<svg width="822" height="67">
				<!-- semester header -->
				<rect width="820" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="1"  rx="5" ry="5"/>
				<text x="300" y="40" fill="black" font-family="serif" font-size="20">2nd semester A.Y. 2012-2013</text>
				</svg>
			</a>

			<div id="secondsem" class="initHide">
				<svg width="822" height="67">
					<!-- subjects header -->
					<rect id="initHide" width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="1"  rx="5" ry="5"/>
					<text id="initHide"  x="20" y="40" fill="black" font-family="serif" font-size="20">CMSC 2</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="140"  rx="5" ry="5"/>
					<text id="initHide" x="151" y="40" fill="black" font-family="serif" font-size="20">CMSC 11</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="280"  rx="5" ry="5"/>
					<text id="initHide"  x="303" y="40" fill="black" font-family="serif" font-size="20">CMSC 56</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="420"  rx="5" ry="5"/>
					<text id="initHide"  x="443" y="40" fill="black" font-family="serif" font-size="20">MATH 26</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="560"  rx="5" ry="5"/>
					<text id="initHide"  x="578" y="40" fill="black" font-family="serif" font-size="20">ENG 2</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="701"  rx="5" ry="5"/>
					<text id="initHide"  x="738" y="40" fill="black" font-family="serif" font-size="20">PE 2</text>

					<!-- grades header -->
				<!-- if browser does not support svg -->
				Sorry, your browser does not support inline SVG.
				</svg>
			</div>

		</center>
	</div>

</div>