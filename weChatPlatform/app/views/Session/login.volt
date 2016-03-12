<h1>User Login</h1>

<form method="post">
	<p>
		Name {{ text_field('username') }} <br>
		Password {{ text_field('password') }} <br>
	</p>
	<p>
		{{ submit_button('Login') }}
	</p>
</form>