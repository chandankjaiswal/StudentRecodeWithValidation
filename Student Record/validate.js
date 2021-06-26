function validate()
{ 
   if( document.StudentRecord.fnames.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.StudentRecord.fnames.focus() ;
     return false;
   }
   if( document.StudentRecord.lname.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.StudentRecord.lname.focus() ;
     return false;
   }
   
   if( document.StudentRecord.paddress.value == "" )
   {
     alert( "Please provide your Postal Address!" );
     document.StudentRecord.paddress.focus() ;
     return false;
   }
   if( document.StudentRecord.peraddress.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.StudentRecord.peraddress.focus() ;
     return false;
   }
   if ( ( StudentRecord.sex[0].checked == false ) && ( StudentRecord.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
   if( document.StudentRecord.City.value == "-1" )
   {
     alert( "Please provide your City!" );
     document.StudentRecord.City.focus() ;
     return false;
   }   
   if( document.StudentRecord.qualification.value == "-1" )
   {
     alert( "Please provide your qualification!" );
    
     return false;
   }  
   if( document.StudentRecord.institute.value == "-1" )
   {
     alert( "Please provide your institute!" );
    
     return false;
   }  
   if( document.StudentRecord.experience.value == "-1" )
   {
     alert( "Please provide your experience!" );
    
     return false;
   }  

   if( document.StudentRecord.District.value == "-1" )
   {
     alert( "Please provide your Select District!" );
    
     return false;
   }   
   if( document.StudentRecord.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.StudentRecord.pincode.value == "" ||
           isNaN( document.StudentRecord.pincode.value) ||
           document.StudentRecord.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.StudentRecord.pincode.focus() ;
     return false;
   }
 var email = document.StudentRecord.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRecord.emailid.focus() ;
     return false;
 }
  if( document.StudentRecord.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.StudentRecord.dob.focus() ;
     return false;
   }
  if( document.StudentRecord.mobileno.value == "" ||
           isNaN( document.StudentRecord.mobileno.value) ||
           document.StudentRecord.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.StudentRecord.mobileno.focus() ;
     return false;
   }
   return( true );
}