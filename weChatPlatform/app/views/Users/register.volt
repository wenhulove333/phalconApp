<h1>User Register</h1>

<form method="post">
	<p>
		Name {{ text_field('username') }} <br>
		Password {{ text_field('password') }} <br>
		Birthday {{ text_field('birthday') }}  <br>
		Gender {{ text_field('gender') }}  <br>
		Mobilephone {{ text_field("mobilephone") }} <br>
		Email {{ text_field('email') }} <br>
	</p>
	<p>
		{{ submit_button('Register') }}
	</p>
</form>