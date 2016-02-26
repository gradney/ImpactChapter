$( function(){

	$.ajax({
		type: 'GET',
		url: 'testsampledata',
		success: function(data) {
			console.log('success', data);

			// $.each(data, function(i, item) {
			// 	$items.append('<li>event</li>');
			// });
		}
	});

});

$( function(){

	$.validator.addMethod(
		'strongPassword', 
		function(value, element) { 
			return this.optional(element) //is this element required, skip if not
				|| (value.length >= 6)
				&& /\d/.test(value)
				&& /[a-z]/i.test(value);
		}, 
		'Your password must be at least 6 characters long'
		+' and contain at least one number and one char.'
	);

	$form = ('#registration-form');
	$($form).validate({
		debug: true,
        errorClass: "invalid",
        validClass: "valid",
        rules: {
                // organizationname: "required", //also can code as: {required:true}
                // firstname: "required",
                // lastname: "required",
                // email: {
                //     required: true,
                //     email: true
                // },
                // password: {
				//     	required: true,
                //		strongPassword: true
                //},
                // password2: {
                //		required: true,
                //		equalTo: "#password"
                //}
        },            
        messages: {
            organizationname: { required: 'Please enter the name of your organization.' },
            firstname: { required: 'Please enter your first name.' },
            lastname: { required: 'Please enter your last name.' },
            email: { required: 'Please enter your email.',
                     email: 'Please enter a <em>valid</em> email address.'
            },
        },
        submitHandler: function(form){
            
            console.log("form: "+form);
            //$('#formlist').append('<li>name: '+ item.name +', location: '+ item.location +'</li>');

            $.ajax({
                url: 'action',
                type: 'POST',
                data: $(this).serialize(),
                success: function(result)
                {
                    if (result == 'fail')
                    {
                        console.log("Fail: Add Organization is missing something...");
                    }
                    else {
                        $('#addOrganizationModal').modal('hide');
                        window.location.href = './test';
                        console.log("result: "+ result.toUpperCase());                           
                    }
                }
            });
        },
        highlight: function(element, errorClass, validClass) {
            //console.log("highlighting element id: "+ element.id);
            if (!$(element).is("em"))
            {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element).css("background-color", "yellow");
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            //console.log("unhighlighting element id: "+ element.id);
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).css("background-color", "transparent");
        },
        errorPlacement: function(error, element) {
            //console.log("error: could not add organization, check element: "+ element.id);
            error.insertAfter(element).css("color", "red");
        }
    }); //end form validation

/** FORM ADD - Add Organization Admin Event Handler ****
    var $form = $('#form-add-organization-admin');
    var $organizationname = $('#organizationname');
    var $numberofusers = $('#numberofusers');
    var $titlename = $('#titlename');
    var $firstname = $('#firstname');
    var $lastname = $('#lastname');
    var $email = $('#email');
    var $phone = $('#phone');
    var $address = $('#address');
    var $address2 = $('#address2');
    var $city = $('#city');
    var $territory = $('#territory');
    var $country = $('#country');
    var $postalcode = $('#postalcode');
    var $couragesubscription = $('#couragesubscription');

    $($form).validate({
        debug: true,
        errorClass: "invalid",
        validClass: "valid",
        rules: {
            organizationname: "required", //also can code as: {required:true}
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            }
        },            
        messages: {
            organizationname: { required: 'Please enter the name of your organization.' },
            firstname: { required: 'Please enter your first name.' },
            lastname: { required: 'Please enter your last name.' },
            email: { required: 'Please enter your email.',
                     email: 'Please enter a <em>valid</em> email address.'
            },
        },
        submitHandler: function($form){

            //TODO: How does this standard function work???
            //$($form).ajaxSubmit();

            $.ajax({
                url: 'action/addorganization',
                type: 'POST',
                data: {
                    organizationname: $organizationname.val(),
                    firstname: $firstname.val(),
                    lastname: $lastname.val()
                },
                // TODO: Understand why this didn't work!
                //data: $(this).serialize(),
                success: function(result)
                {
                    if (result == 'fail')
                    {
                        console.log(result + ": Add Organization did not complete.");
                    }
                    else 
                    {
                        //$('#addOrganizationModal').modal('hide');
                        window.location.href = './organizations';
                        console.log("result: "+ result);
                    }
                }
            });
        },
        highlight: function(element, errorClass, validClass) {
            //console.log("highlighting element id: "+ element.id);
            if (!$(element).is("em"))
            {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element).css("background-color", "yellow");
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            //console.log("unhighlighting element id: "+ element.id);
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).css("background-color", "transparent");
        },
        errorPlacement: function(error, element) {
            //console.log("error: could not add organization, check element: "+ element.id);
            error.insertAfter(element).css("color", "red");
        }
    }); //end form validation
*/

}); //end jquery