 $(document).ready(function(){
	var DOMAIN = "http://localhost/php/inventory_project/public_html";
	$("#register_form").on("submit",function(){
		var status = false;
		var name = $("#username");
		var email = $("#email");
		var pass1 = $("#password1");
		var pass2 = $("#password2");
		var type = $("#usertype");
		var n_patt = new RegExp(/^[A-Za-z ]+$/);
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);	
		if(name.val() == "" || name.val().length < 6){
			name.addClass("border-danger");
			$("#u_error").html("<span class='text-danger'>Please Enter Name and Name should be more than 6 characters.</span>");
			status = false;
		} else {
			name.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
		} // name

		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address.</span>");
			status = false;
		} else {
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		} // email

		if(pass1.val() == "" || pass1.val().length < 9){
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Please enter more than 9 digit password.</span>");
			status = false;
		} else {
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		} // password1

		if(pass2.val() == "" || pass2.val().length < 9){
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password confirmation doesn't match.</span>");
			status = false;
		} else {
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		} // password2

		if(type.val() == ""){
			type.addClass("border-danger");
			$("#t_error").html("<span class='text-danger'>Please set user type</span>");
			status = false;
		} else {
			type.removeClass("border-danger");
			$("#t_error").html("");
			status = true;
		} // password2

		if((pass1.val() == pass2.val()) && status == true){
			$(".overlay").show();
			$.ajax({
				url: DOMAIN+"/includes/process.php",
				method: "POST",
				data: $("#register_form").serialize(),
				success: function(data){
					// alert(data);
					if(data == "EMAIL_ALREADY_EXISTS"){
						$(".overlay").hide();
						alert("It seems like your email is already used")
					} else if(data == "SOME_ERROR"){
						$(".overlay").hide();
						alert("Something went wrong...");
					} else {
						$(".overlay").hide();
						window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are successfully registered. Please log in.");
					}
				}
			})
		} else {
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password doesn't matched.</span>");
			status = true;
		} // confirm password

	})

	/*  LOGIN */

	$("#form_login").on("submit",function(){
		var email = $("#log_email");
		var pass = $("#log_password");
		var status = false;

		if(email.val() == ""){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Email Address.</span>");
			status = false;
		}else {
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}

		if(pass.val() == ""){
			pass.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please Enter Password.</span>");
			status = false;
		}else {
			pass.removeClass("border-danger");
			$("#p_error").html("");
			status = true;
		}

		if(status){
			$(".overlay").show();
			$.ajax({
				url: DOMAIN+"/includes/process.php",
				method: "POST",
				data: $("#form_login").serialize(),
				success: function(data){
					// alert(data);
					if(data == "NOT_REGISTERED"){
						$(".overlay").hide();
						 email.addClass("border-danger");
						$("#e_error").html("<span class='text-danger'>Please create an account first.</span>");
					} else if(data == "PASSWORD_NOT_MATCHED"){
						$(".overlay").hide();
						pass.addClass("border-danger");
						$("#p_error").html("<span class='text-danger'>Please Enter Correct Password.</span>");
						status = false;
					} else {
						$(".overlay").hide();
						console.log(data);
						// alert(data);
						window.location.href = DOMAIN+"/dashboard.php";
					}
				}
			})
		} //if status


	});

	/*  Fetch Category */
	fetch_category();
	function fetch_category()
	{
		$.ajax({
			url: DOMAIN+"/includes/process.php",
			method: "POST",
			data: {getCategory: 1},
			success: function(data){
				// alert(data);
				var root = "<option value='0'>Root</option>";
				$("#parent_cat").html(root+data);
				// $("#parent_cat").html(root+data);
			}	
		});
	}

	/*  Add Category */
	$("#category_form").on("submit",function(){
		if($("#category_name").val() == ""){
			$("#category_name").addClass("border-danger");
			$("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
		} else {	
			$.ajax({
				url: DOMAIN+"/includes/process.php",
				method: "POST",
				data: $("#category_form").serialize(),
				success: function(data){
					// alert(data);
					if(data == "CATEGORY_ADDED"){
						$("#category_name").removeClass("border-danger");
						$("#cat_error").html("<span class='text-success'>New Category Added Successfully!</span>");
						$("#category_name").val("");
					} else {
						alert(data);
					}
				}
			});
		}
	});

	/*  Add Brand */
	$("#brand_form").on("submit",function(){
		if($("#brand_name").val() == ""){
			$("#brand_name").addClass("border-danger");
			$("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
		}else {
			$.ajax({
				url: DOMAIN+"/includes/process.php",
				method: "POST",
				data: $("#brand_form").serialize(),
				success: function(data){
					if(data == "BRAND_ADDED"){
						$("#brand_name").removeClass("border-danger");
						$("#brand_error").html("<span class='text-success'>New Brand Added Successfully!</span>");
						$("#brand_name").val("");
					} else {
						alert(data);
					}
					
				}
			});
		}
	})


	





});