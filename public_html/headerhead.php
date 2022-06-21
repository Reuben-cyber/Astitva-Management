<html>
<nav role="navigation" style="z-index:1;">
		<ul>
			<li><a href="#">Volunteers</a>
				<ul class="dropdown">
					<li><a href="addvolunteers.php">Add Volunteer</a></li>
					<li><a href="assignvol.php">Assign Duties to Volunteer</a></li>
					<li><a href="deletevolunteers.php">Delete Volunteer</a></li>
				</ul>
			</li>
			<ul>
			<li><a href="#">Judges</a>
				<ul class="dropdown">
					<li><a href="addjudge.php">Add Judges</a></li>
					<li><a href="updatejudge.php">Update Judges</a></li>
					<li><a href="deletejudge.php">Delete Judges</a></li>
				</ul>
			</li>
			<li><a href="#">Reports</a>
				<ul class="dropdown">
					<li><a href="choose_event.php">List of Participants</a></li>
					<li><a href="listofvol.php">List of Volunteers</a></li>
					<li><a href="addvolmem.php">List of Volunteers (Heritage)</a></li>
					<li><a href="listofspon">List of Sponsors</a></li>
					<li><a href="listofevent.php">Master List of Events</a></li>
				</ul>
			</li>
			<li><a href="connect.php">Send Emails</a></li>
			<li><a href="#">Sponsors</a>
				<ul class="dropdown">
					<li><a href="addsponsor.php">Add New Sponsor</a></li>
					<li><a href="updatesponsor.php">Update Existing Sponsor</a></li>
					<li><a href="deletesponsors.php">Remove Existing Sponsor</a></li>
				</ul>
			</li>
			<li><a href="accounts.php">Accounts</a>
			<li> <a href="#">MY ACCOUNT  Hello <?php echo $_SESSION["username"];?>! &nbsp(<?php echo $_SESSION["event"];?>)</a>
				<ul class="dropdown">
				    <li><a href="help.pdf" target="_blank"><img src="info.png" style="width: 18px;"> Help</a></li>
					<li><a href="updatepassword.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
	</nav>
</html>