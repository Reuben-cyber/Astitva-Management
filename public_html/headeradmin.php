
	<html>
	    <?php  $u=explode(" ",$_SESSION['username']);?>
	<nav role="navigation" style="z-index:1">
		<ul>
			<li><a href="#">Volunteers</a>
				<ul class="dropdown">
					<li><a href="addvolunteers.php">Add Volunteer</a></li>
					<li><a href="assignvol.php">Assign Duties to Volunteer</a></li>
					<li><a href="deletevolunteers.php">Delete Volunteer</a></li>
				</ul>
			</li>
			<li><a href="#">Users</a>
				<ul class="dropdown">
					<li><a href="adduser.php">Add User</a></li>
					<li><a href="active.php">Activate/De-Activate User</a></li>
					<li><a href="deleteuser.php">Delete User</a></li>
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
					<li><a href="listofpart.php">List of Participants</a></li>
					<li><a href="choose_event.php">Eventwise Participants</a></li>
					<li><a href="listoftransacts.php">List of Transactions</a></li>
					<li><a href="summarytransact.php">Summary of Transactions</a></li>
					<li><a href="balancesheet.php">Statement of Accounts</a></li>
					<li><a href="listofvol.php">List of Volunteers</a></li>
					<li><a href="addvolmem.php">List of Volunteers (Heritage)</a></li>
					<li><a href="listofspon.php">List of Sponsors</a></li>
					<li><a href="listofwinners.php">List of Winners</a></li>
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
			<li><a href="#">Events</a>
				<ul class="dropdown">
					<li><a href="addevent.php">Add New Event</a></li>
					<li><a href="updateevent0.php">Update Existing Event</a></li>
					<li><a href="deleteevent.php">Remove Existing Event</a></li>
					<li><a href="winners.php">Winners</a></li>
				</ul>
			</li>
			
			<li><a href="">Certificate Designer</a>
				<ul class="dropdown">
				<li><a href="volunteercertificate.php">Volunteer Certificate</a></li>
				<li><a href="addvolunteers.php">Event Certificate</a></li>
			</ul>
			</li>
			<li><a href="#">Utilities</a>
			  <ul class="dropdown">
			    <li><a href="marque.php">Notice Board</a></li>
				<li><a href="feedbackad.php">Feedbacks</a></li>
				<li><a href="img.php">Images</a></li>
			  </ul>
			</li>
			<li><a href="#">Accounts</a>
			  <ul class="dropdown">
			    <li><a href="accounts.php">Add Vouchers / Receipts</a></li>
				<li><a href="updateaccounts.php">Update Vouchers / Receipts</a></li>
			  </ul>
			</li>
			<li> <a href="#">MY ACCOUNT  Hello <?php echo $u[0];?>!</a>
				<ul class="dropdown">
				    <li><a href="help.pdf" target="_blank"><img src="info.png" width="24px"> Help</a></li>
					<li><a href="updatepassword.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</html>