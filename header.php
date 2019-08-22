<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #c2baba;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #c2baba;
  color: white;
  text-align: center;
}
</style>
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$user = new User();
$session = $user->getSession();
?>
<div class="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
    	<?php if(!empty($session)){ ?>
	    <a href="welcome.php?q=logout">LOGOUT</a>
	    <?php } ?>
	</div>
</div> 