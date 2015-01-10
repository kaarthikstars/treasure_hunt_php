$("#document").ready(function(){
		
			$("#reg_submit").click(function(evnet){
			$( "#reg_from_comments" ).text("");
			if($( "#team_name" ).val().length>0 && $( "#user_1" ).val().length>0 && $( "#user_2" ).val().length>0 && $( "#col_name" ).val().length>0 && $( "#password" ).val().length>0 && $( "#con_password" ).val().length>0 )
			{
					if($( "#password" ).val()==$( "#con_password" ).val())
					{
						$.post( "process.php", $( "#reg_form" ).serialize(),function(data)
						{
							$( "#team_name" ).removeClass().addClass("form-control");
							if(data=="available")
								$( "#team_name" ).addClass("textbox_highlight_green");
							else
							{
								$( "#team_name" ).addClass("textbox_highlight_red");
								$( "#team_name" ).attr("placeholder","hello");
							}
						});
					}
					else
					{
						$( "#password" ).val("");
						$( "#con_password" ).val("");
						$( "#reg_from_comments" ).html("<i style=\"color:red;\">Password and Confirm Password Mismatch</i>");
					}
			}
			else
			{
				$( "#reg_from_comments" ).html("<i style=\"color:red;\">Please fill in all fields</i>");
			}

			});
			
			$("#team_name").blur(function()
			{
				if($( "#team_name" ).val().length>0)
				{
					$.post( "process.php", $( "#reg_form" ).serialize(),function(data)
					{
						$( "#team_name" ).removeClass().addClass("form-control");
						if(data=="available")
							$( "#team_name" ).addClass("textbox_highlight_green");
						else
						{
							$( "#team_name" ).addClass("textbox_highlight_red");
							$( "#team_name" ).val("");
							$( "#team_name" ).attr("placeholder",data);
							
						}
					});
				}
			});
		});