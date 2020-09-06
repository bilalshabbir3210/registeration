
$(document).ready(function(){
        //var is_valid ;
        $('#password, #cpassword').on('keyup', function () {
        if ($('#password').val() != '' && $('#cpassword').val() != '' && $('#password').val() == $('#cpassword').val()) {
          //$(".singbtn").attr("disabled",false);
         
          $('#cPwdInvalid').hide();
          $('#cPwdValid').html('Valid').css('color', 'green');
         
        } else {
          //$(".singbtn").attr("disabled",true);
         
          $('#cPwdInvalid').show();
          $('#cPwdInvalid').html('Password does not match').css('color', 'red');
         
          }
      });

     let currForm1 = document.getElementById('signUp');
        // Validate on submit:
        currForm1.addEventListener('submit', function(event) {
          if (currForm1.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          
          }
          
          currForm1.classList.add('was-validated');
        }, false);
        // Validate on input:
        currForm1.querySelectorAll('.form-control').forEach(input => {
          input.addEventListener(('input'), () => {
            if (input.checkValidity()) {
              input.classList.remove('is-invalid')
              input.classList.add('is-valid');
               
            } else {

              input.classList.remove('is-valid')
              input.classList.add('is-invalid');
            }
            var is_valid = $('.form-control').length === $('.form-control.is-valid').length;
            //$(".singbtn").attr("disabled", !is_valid);


          });
        });

$('#signUp').submit(function(e){

  e.preventDefault();

if (currForm1.checkValidity() ===true) {
 
 // var data = $('#signUp').serialize();
var firstname = $('#firstname').val();
var lastname = $('#lastname').val();
var code = $('#code').val();
var contact = $('#number').val();
var number = code+contact;
var email = $('#email').val();
var password = $('#password').val();

var data ={'firstname':firstname,'lastname':lastname,'number':number,'email':email,'password':password};

data = JSON.stringify(data);

   
$.ajax({
   
  method: 'POST',
   url: '/getRegistered',
   headers: {
        'Authorization':'Basic YWRtaW46YWRtaW4xMjM=',
        'Content-Type':'application/json',
    },
    dataType: 'json',
    data:data,
    success: function(data){


      if(data.state ==1){
        //$('#signUp')[0].reset();
        $('#myModal').modal('toggle');
      }
      
      if(data.state ==0){
      $('.display_msg').html('<p class="alert alert-danger">'+data.message+'</p>');
      }
      else{
        $('.display_msg').html('');
      }
    }

  });

}

});



$('.input-group-append').click(function(){

var el = $(this);
var getField = el.prev().attr('id');
var type = el.prev().attr('type');

if(type ==='password'){

$('#'+getField).attr('type','text');
$(this).find('i').removeClass('fa-eye-slash');
$(this).find('i').addClass('fa-eye');

}
else{

$('#'+getField).attr('type','password');
$(this).find('i').removeClass('fa-eye');
$(this).find('i').addClass('fa-eye-slash');

}
});
});


/*{   "name":
            { 
              "name":"Name",
              "value":"Joshuahof",
              "id":"name",
              "type":"text",
              "meta_key":"name"
            },
    "email":{
              "name":"Email",
              "value":"no-replypync@gmail.com",
              "id":"email",
              "type":"email",
              "meta_key":"email"
            },
    "subject":{
              "name":"Subject",
              "value":"A new way of advertising.",
              "id":"subject",
              "type":"text",
              "meta_key":"subject"
            },
    "message":{
              "name":"Message",
              "value":"Hi!  mrtechseller.com \r\n \r\nDid y\u043eu kn\u043ew th\u0430t it is p\u043essibl\u0435 t\u043e s\u0435nd \u0441\u043emm\u0435r\u0441i\u0430l \u043eff\u0435r p\u0435rf\u0435\u0441tly l\u0430wfully? \r\nW\u0435 pr\u043eff\u0435r \u0430 n\u0435w l\u0435g\u0430l w\u0430y \u043ef s\u0435nding pr\u043ep\u043es\u0430l thr\u043eugh f\u0435\u0435db\u0430\u0441k f\u043erms. Su\u0441h f\u043erms \u0430r\u0435 l\u043e\u0441\u0430t\u0435d \u043en m\u0430ny sit\u0435s. \r\nWh\u0435n su\u0441h m\u0435ss\u0430g\u0435s \u0430r\u0435 s\u0435nt, n\u043e p\u0435rs\u043en\u0430l d\u0430t\u0430 is us\u0435d, \u0430nd m\u0435ss\u0430g\u0435s \u0430r\u0435 s\u0435nt t\u043e f\u043erms sp\u0435\u0441ifi\u0441\u0430lly d\u0435sign\u0435d t\u043e r\u0435\u0441\u0435iv\u0435 m\u0435ss\u0430g\u0435s \u0430nd \u0430pp\u0435\u0430ls. \r\n\u0430ls\u043e, m\u0435ss\u0430g\u0435s s\u0435nt thr\u043eugh \u0441\u043ent\u0430\u0441t F\u043erms d\u043e n\u043et g\u0435t int\u043e sp\u0430m b\u0435\u0441\u0430us\u0435 su\u0441h m\u0435ss\u0430g\u0435s \u0430r\u0435 \u0441\u043ensid\u0435r\u0435d imp\u043ert\u0430nt. \r\nW\u0435 \u043eff\u0435r y\u043eu t\u043e t\u0435st \u043eur s\u0435rvi\u0441\u0435 f\u043er fr\u0435\u0435. W\u0435 will s\u0435nd up t\u043e 50,000 m\u0435ss\u0430g\u0435s f\u043er y\u043eu. \r\nTh\u0435 \u0441\u043est \u043ef s\u0435nding \u043en\u0435 milli\u043en m\u0435ss\u0430g\u0435s is 49 USD. \r\n \r\nThis \u043eff\u0435r is \u0441r\u0435\u0430t\u0435d \u0430ut\u043em\u0430ti\u0441\u0430lly. Pl\u0435\u0430s\u0435 us\u0435 th\u0435 \u0441\u043ent\u0430\u0441t d\u0435t\u0430ils b\u0435l\u043ew t\u043e \u0441\u043ent\u0430\u0441t us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +375259112693",
              "id":"message",
              "type":"textarea",
              "meta_key":"message"
            }
 }*/