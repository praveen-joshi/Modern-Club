function change()
{
	var login=document.getElementById('user_login');
	var signup=document.getElementById('user_signup');
	var login_button=document.getElementById('login_button');
	var signup_button=document.getElementById('signup_button');
	if(login.classList.contains('active-form'))
	{
		//alert("login-form is selected currently");
		login.classList.toggle("active-form");
		login.style.display='none';
		signup.classList.toggle("active-form");
		signup.style.display='block';

		login_button.classList.toggle("active_button");
		signup_button.classList.toggle("active_button");

	}
	else
	{
		//alert("signup-form is selected currently");
		signup.classList.toggle("active-form");
		signup.style.display='none';
		login.classList.toggle("active-form");
		login.style.display='block';

		login_button.classList.toggle("active_button");
		signup_button.classList.toggle("active_button");

	}
}

$(document).ready(function(){

	//ajax for events 
	function loadevents(){
		$.ajax({
			url: 'all_event_ajax.php',
			type: 'POST',
			//data: {search_text:text},
			//data is empty in this case
			success: function(data)
			{
				$('#event_box').html(data);
			}
		});
	}

	loadevents();


	$('#event_search').on('keyup',function(){
	var text=$(this).val();
		$.ajax({
			url: 'event_ajax.php',
			type: 'POST',
			data: {search_text:text},
			success: function(data)
			{
				$('#event_box').html(data);
			}
		});
	});

	//ajax for clubs search

	function loadclubs(){
		$.ajax({
			url: 'all_club_ajax.php',
			type: 'POST',
			//data: {search_text:text},
			//data is empty in this case
			success: function(data)
			{
				$('#club_box').html(data);
			}
		});
	}

	loadclubs();


	$('#club_search').on('keyup',function(){
	var text=$(this).val();
		$.ajax({
			url: 'club_ajax.php',
			type: 'POST',
			data: {search_text:text},
			success: function(data)
			{
				$('#club_box').html(data);
			}
		});
	});


});
