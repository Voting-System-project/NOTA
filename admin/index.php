<?php include ('head.php');?>

<body>
  <center>
		<br>
		<a href="/projects/HOME/index.html"><img style="background-color:grey" src="/projects/HOME/NOTA/logo.png" height="120px"></a>
		<h1>Welcome to NOTA</h1>
		<p>A proffesional Automated Voting Platform</p>
	</center><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
				<table>
					<tr>
						<td>
							<a class="btn-lg btn-success" href="/projects/HOME/NOTA/index.html">Home</a>
						</td>
					</tr>
				</table><br>
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Admin Log in</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Log in your Username" name="username" type="text" autofocus>
                                </div>

                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>


                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>


                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>

			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
