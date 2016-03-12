<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/custom.css" rel="stylesheet">
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
    <div id="miheader">
      <?php
        if($this->session->userdata('is_logged_in') === TRUE)
          {
          echo 
            "<div class = 'cheshire'><form action = '/sessions/destroy' method = 'post'>
            <input type = 'submit' value = 'Log out'>
            </form></div>"; 
          }
        if($this->session->userdata('product_name') !== FALSE)
          {
          echo 
            "<div class = 'cheshire'><form action = 'buy' method = 'post'>
            <input type = 'submit' value = 'Shopping Cart'>
            </form></div>"; 
          }
       ?>
			<img src="assets/speea_smlogo.png">		
			<h1>Unifying Aerospace Employees as One Collective Voice</h1>
  				<button type="button"><a href="layoff.php">Layoff Information</a></button>
		</div>
    <!--navigation does here-->  
    <div class="navbar-inner">  
      <div class="container">  
      <ul class="nav navbar-nav">
        <li><a href="home" class="white">Home</a></li>
        <li><a href="contact" class="white">Contact Us</a></li>
        <li><a href="shop" class="white">Store</a></li>
        <li><a href="join" class="white">Join Your Union </a></li>
        <li><a href="login" class="white">Login</a></li>
      </ul>
      </div>
    </div>
    <!-- ===== 4 Icon Section ==== -->
    <div class="boxrow">
      <div class="box">
        <img src="assets/plane-icon1.png">
        <h4>Enrichment Opportunities</h4>
        <p>Training Aid and Professional Development</p>
      </div>
      <div class="box">
        <img src="assets/plane-icon2.png">
        <h4>Well-Being Support</h4>
        <p>Promoting Workplace Safety and Job Security</p>
      </div>
      <div class="box">
        <img src="assets/plane-icon3.png">
        <h4>Advanced Assistance</h4>
        <p>Aerospace Medical and Retirement Assistance</p>
      </div>
      <div class="box">
        <img src="assets/plane-icon4.png">
        <h4>Strength In Numbers</h4>
        <p>A collective voice who represents your rights</p>
      </div>
    </div>
 <!-- =====END OF 4 Icon Section ==== -->

 <!-- =======START EVENTS======== -->
    <div class="contentbox">
      <h1>Upcoming Events</h1>
      <div class="eventbox">
        <h3>34th Annual MLK Jr. Celebration</h3>
        <h4>Monday, Jan. 18</h4>
        <h5>Garfield High School</h5>
        400 23rd Ave, Seattle<br>
        Workshops/speakers at 9:30 a.m.<br>
        Rally at 11 a.m.<br>
        <p>March at 12:30 p.m.</p>
        <p>Sponsored by the MLK Jr. Celebration committee. With a commitment to nonviolence and eduction, this event honors King's struggle for racial equality and economic justice.</p>
      </div>

      <div class="eventbox">
        <h3>Self-Defense Class at SPEEA</h3>
        <h4>Saturday, Feb. 27</h4>
        <h5>SPEEA Tukwila</h5>
        15205 52nd Ave S, Tukwila<br>
        From 9 a.m. to 1 p.m.<br>
        RSVP - <a href="#">sheilam@speea.org</a> or<br>
        <p>at <a href="#">justinl@speea.org</a></p>
        <p>Hosted by the Northwest Women's Advocacy Committee. Open to the public, yet must be 8 years of age or older to attendand.</p>
      </div>

      <div class="eventbox">
        <h3>SPEEA Hockey Night</h3>
        <h4>Friday, March 11</h4>
        <h5>Seattle Thunderbirds vs. Everett Silvertips</h5>
        850 20th Ave, Seattle<br>
        <p>Game starts at 7:35 p.m.</p>
        <p>Tickets are $9 each (60% off)</p>
        <p>Hosted by the Northwest Membership Activities Committee. Ages 3 and under get in free.</p>
      </div>
    </div>

<!-- ===Start of Middle Content == -->
    <div class="announcement">
      <h1>Announcement and News</h1>
      <h3>Resume and job-search workshops available at Ed Wells Partnership</h3>
      <p>Ed Wells Partnership (EWP) recently added a number of resume and job-search workshops to its list of offerings. The workshops provide information about how to be successful searching for new jobs within Boeing.</p>

      <p>Complete information and registration is available on the Boeing intranet: <a href="#">http://edwells.web.boeing.com/TransitionResources/</a></p>
      <h3>Apply for regional Tellers Committees</h3>
      <p>SPEEA is seeking candidates for the regional Tellers Committees, responsible for overseeing union elections.</p>

      <p>To be eligible to apply, you must be a regular SPEEA member in good standing for at least the past 12 months. Applicants cannot serve at the same time on the Executive Board, Council or Judicial Review Committee.</p>


      <h3>Nominate members for volunteer efforts
      <p>Helping Other People Excel (HOPE) award</h3>
      SPEEA is seeking nominations for the Stephen Pezzini Helping Other People Excel (HOPE) award. You can nominate a member from any SPEEA bargaining unit in any state who goes above and beyond for his/her union and community.
      Pezzini was a Council Rep in Everett who inspired others by his strong union advocacy for workplace issues as well as active support of his community. He died of cancer at age 36 in 1995.</p>
      <p>To nominate a member, email your nominee’s name to terryh@speea.org. Include specific examples of how the member contributes to SPEEA and the community.
      <a href="#">Deadline: Feb. 22</a></p>
    </div>
  <!-- =====End of Middle Content === -->  

  <!-- =====Plane Image w/Quote ===== -->
    <div class="quote">
      <span>"</span>
      Committed to staying united and supporting each other.
      <span>"</span><br>
      - Steve Karich<br> (Environmental Engineer)
    </div>
  <!-- ======End Plane Image w/Quote=== -->

  <!-- ======Start Office Locations ===== -->
  		<div class="locations">
        <div class="btn-group">
  			  <button type="button" class="btn btn-default">
  			    <h3>Headquarters</h3>
  				  15205 52nd Ave S<br>
  				  <p>Seattle, Wa 98188</p>
  				  Tel: (206) 433-0991<br>
  				  <p>Fax: (206) 248-3990</p>
  				  <h4>Office Hours:</h4>
  				  Mon - Thurs: 8 a.m. - 5 p.m.<br>
  				  <p>Friday: 8 a.m. - 4:30 p.m.</p>
  			  </button>
  		  </div>	
  		  <div class="btn-group">
  			  <button type="button" class="btn btn-default">
  				  <h3>Everett Hall</h3>
  				  2414 106th Street SW<br>
  				  <p>Everett, WA 98204</p>
  				  Tel: (425) 355-2883<br>
  				  <p>Fax: (425) 355-9380</p>

  				  <h4>Office Hours:</h4>
  				  Mon - Thurs: 8 a.m. - 4:30 p.m.<br>
  				  <p>Friday: 8 a.m. - 4:30 p.m.</p>
  			  </button>
  		  </div>	
  		  <div class="btn-group">
  			  <button type="button" class="btn btn-default">
  				  <h3>Wichita Hall</h3>
  				  973 S Glendale Street<br>
  				  <p>Wichita, KS 67218</p>
  				  Tel: (316) 682-0262<br>
  				  <p>Fax: (316) 682-4668</p>

  				  <h4>Office Hours:</h4>
  				  Mon - Thurs: 8 a.m. - 5 p.m.<br>
  				  <p>Friday: 8 a.m. - 4:30 p.m.</p>
  			  </button>
  		  </div>
      </div>	
	</body>
</html>