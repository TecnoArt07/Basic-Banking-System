
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">



<script>
  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
          // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  }); 
</script>

<style>

  body{
      
      background-color: #0D6EFD;
      background-image:
        linear-gradient(
          to left, 
          #F0F8FF, 
          #fff, 
          rgb(255, 255, 255), 
          #FFFFE0
        );
    }
</style>


<body>
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 	 <a class="navbar-brand" href="#">INDIAN BANK</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="home.php"> Home </a></li>
		<li class="nav-item"><a class="nav-link" href="transferMoney.php"> Transfer Money </a></li>
    <li class="nav-item"><a class="nav-link" href="transactionhistory.php"> Transaction History</a></li>
		<li class="nav-item"><a class="nav-link" href="createUser.php"> Create User </a></li>
    <li class="nav-item"><a class="nav-link" href="contactUs.php"> Contact Us </a></li>
    
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</body>