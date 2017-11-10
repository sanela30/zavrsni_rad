<?phpheader("Location: posts.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>create-post</title>
	 <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    
		<?php 
			require 'header.php';

		 ?>

                <form class="NewPost" action="create-post.php" method="POST">

                          <h5>add post</h5>
                          <input type="Text" id="Author" placeholder="Title"/></br></br>
                          <input type="date" id="date"/></br></br>
                          <textarea name="text" rows='5' cols='28' placeholder="text"></textarea><br>

                           <button type="Submit">Send</button><br>
        

                </form>

                <main role="main" class="container">

    
  

            <?php 

            require 'sidebar.php';

            ?>

      

    </div><!-- /.row -->

</main><!-- /.container -->



        <?php 
            require 'footer.php';

         ?>

</body>
</html>