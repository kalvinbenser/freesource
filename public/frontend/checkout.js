





      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $(".btn-submit").click(function(e){

          e.preventDefault();

          var name = $("input[name=name]").val();

          var email = $("input[name=email]").val();
          var phone = $("input[name=phone]").val();
          var address = $("input[name=address]").val();
          var city = $("input[name=city]").val();
          var state = $("input[name=state]").val();
          var country = $("input[name=country]").val();
          var pincode = $("input[name=pincode]").val();





                   if(!name){
                     name_error="name is required";
                     $('#name_error').html("");
                     $('#name_error').html(name_error);
                   }
                   else{
                      name_error="";
                      $('#name_error').html("");
                   }



                   if(!email){
                     email_error="email  is required";
                     $('#email_error').html("");
                     $('#email_error').html(email_error);
                   }
                   else{
                     email_error="";
                      $('#email_error').html("");
                   }

                   if(!phone){
                     phone_error="phone number  is required";
                     $('#phone_error').html("");
                     $('#phone_error').html(phone_error);
                   }
                   else{
                     phone_error="";
                      $('#phone_error').html("");
                   }

                   if(!address){
                     address_error="address  is required";
                     $('#address_error').html("");
                     $('#address_error').html(address_error);
                   }
                   else{
                     address_error="";
                      $('#address_error').html("");
                   }



                   if(!city){
                     city_error="city  is required";
                     $('#city_error').html("");
                     $('#city_error').html(city_error);
                   }
                   else{
                      city_error="";
                      $('#city_error').html("");
                   }

                   if(!state){
                     state_error="state  is required";
                     $('#state_error').html("");
                     $('#state_error').html(state_error);
                   }
                   else{
                     state_error="";
                      $('#state_error').html("");
                   }

                   if(!country){
                     country_error="country  is required";
                     $('#country_error').html("");
                     $('#country_error').html(country_error);
                   }
                   else{
                        country_error="";
                      $('#country_error').html("");
                   }

                   if(!pincode){
                     pincode_error="pincode  is required";
                     $('#pincode_error').html("");
                     $('#pincode_error').html(pincode_error);
                   }
                   else{
                      pincode_error="";
                      $('#pincode_error').html("");
                   }


          data={
            name:name,
            email:email,
            phone:phone,
            address:address,
            city:city,
            state:state,
            country:country,
            pincode:pincode,
          }

          if(name_error !='' || email_error !='' || phone_error !=''|| address_error !='' || city_error !='' || state_error !='' || country_error !='' || pincode_error !='' ){
            return false;
          }
          else{




          $.ajax({
             type:'POST',
             url:"{{ url('proceed_to_pay') }}",
             data:data,
             success:function(data){
            alert(`${data.name} ${data.success}`);
             }
          });





}
      });
