$(document).ready(function () {
  $('#preloader').fadeOut(500);
  $('.single-item').slick({
    // centerMode: true,
    // centerPadding: '60px',
    // slidesToShow: 1, 
    slidesToScroll: 1,
    autoplaySpeed: 2000
  });



  // Add smooth scrolling to all links
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });



  //header search box
  $('.headerTop .login .search .input-group-addon').on('click', function () {
    $(this).parents('.search').toggleClass('open');
  });
  $('.navbar .nav-item').on('click', function (event) {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
  });

 // Aos Animation events on scroll
  AOS.init({
    easing: 'ease-out-back',
    duration: 1000
  });

  //,find teacher section parent switch
  // $('#parentFindTeacher').hide();
  $('body').delegate('.select_teacher_option input[type="radio"]', 'change', function () {

    if ($(this).attr('value') == '3') {

      $('#parentFindTeacher').html('<input type="text" name="parent_name" class="form-control" placeholder="Name of Parent" required><div class="form-control-feedback"><i class="icon-user text-muted"></i></div>');
    } else {
      $('#parentFindTeacher .form-control,#parentFindTeacher i').remove();
    }
  });


  $('.messageType a').on('click', function () {

  });


  /*$('.teachnav li').click(function(){
   $(this).addClass('active'); 
   $(this).siblings().removeClass('active');
  $(".teacher_tab .tab").removeClass('active');
  
   $($(this).children().attr("href")).addClass('active');
  
  
  });*/


  // $('.message #tabs-basic-1').css({ "min-height": $(window).height() - $('.navbar').innerHeight() - $('.footer').innerHeight() - 210 })

  $('.alldownloadbtn').click(function () {

    $(".downloadfile1").each(function () {
      alert('hgdfh dfsd ');
      $(this).click();
    });

  });




  $(window).scroll(function () {

    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
      $('header').addClass('stickyheader');
    } else {
      $('header').removeClass('stickyheader');
    }
  });


$('#tutorchoose').on('change',function(){
$('#tutorfile').html($("#tutorchoose").val().substring($("#tutorchoose").val().lastIndexOf('\\') + 1));
});

$('#tutorchoose1').on('change',function(){
  $('#tutorfile1').html($("#tutorchoose1").val().substring($("#tutorchoose1").val().lastIndexOf('\\') + 1));
  });






  $(".dropdown-toggle").mouseover(function(){
    $(".dropdown-menu-right").css("display", "block");
});
$(".dropdown-toggle").mouseout(function(){
    $(".dropdown-menu-right").css("display", "none");
});

$('.one-time').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});

setTimeout(function()  {
$('.fc-time-grid-event').click(function(e){
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('eventselected');
  });



  $('.fc-time-grid-event').click(function(){
   var time = /*$(this).click(function(){
    var col   = $(this).prevAll().length;
 
    alert(col);
   });*/""+$('#date').val()+" " + " " + $(this).find('.fc-time').attr('data-start') + "   " + " ( " + $('.teachervent_choosebtn .select2-selection__rendered').attr('title') +") <br/>" ;
   $('.selectedlesson_container ul li').append(time);
  });

}, 500);


// $('.fc-time-grid-event').click(function(){
//    var time = /*$(this).click(function(){
//     var col   = $(this).prevAll().length;
 
//     alert(col);
//    });*/"9.15.2014 " + " " + $(this).find('.fc-time').attr('data-start') + "   " + " (" + $('.teachervent_choosebtn1 .select2-selection__rendered').attr('title') + " - " + $('.teachervent_choosebtn .select2-selection__rendered').attr('title') +") <br/>" ;
//    $('.selectedlesson_container ul li').append(time);
//   });

// }, 500);

// $(window).load(function(){
//   var windowSize = $(window).width();               
//    if (windowSize < 769) {
//    $('.allappointment_wrap2 .allappoinment41 .datatable-basic').attr( 'data-page-length', '5'); 
//    }
//   });





// $('.fc-time-grid-event').draggable(function(e){
//   e.preventDefault();
//   alert();
//   // $(this).removeClass('fc-draggable');


  
//   });

// setTimeout(() => {
//   $( ".fc-content-col a" ).draggable({

//     start: function() {
//       //draggable: false;
//       //$('.fc-draggable').draggable({ disabled: true });
//       alert();
//     },
//     drag: function() {
//      // $('.fc-draggable').draggable({ disabled: true });
//      $(this).removeClass('fc-start, fc-end, fc-draggable');
//      $(this).css({'top':'0','bottom':'initial'});
//     },
//     stop: function() {
//       //$('.fc-draggable').draggable({ disabled: true });
//     }
//    });
// }, 500);






// $(".fc-time-grid-event").draggable({
//   axis: "x",
//   drag: function(event, obj){
//       if(condition)
//           return false;
//   }
// });

// $( ".fc-time-grid-event" ).draggable({ 
//   axis: "y",
//   drag: function(event, obj){
//       if(obj.position.top > 0){
//          obj.position.top = 0;
//       }
//   },

// });

// $( ".fc-time-grid-event" ).draggable({
//   addClasses: false
// });

});

$('.parentappcalendar .fullcalendar-agenda').ready(function(){
  setTimeout(function(){$('.fc-title').append("<br/><p class='subject_app'>Subject</p>");},500);
 });
 $('.parentappcalendar .fullcalendar-agenda').ready(function(){
  setTimeout(function(){$('.fc-title').append("<h3 class='subject_app'>Teacher</h3>");},500);
 });

// $('.fullcalendar-agenda').ready(function(){
//   setTimeout(function(){$('.fc-content .fc-time').append("<br/><img src='assets/images/teacherProfile.png' class='fctime_img'/>");},500);
//  });

$('.parentappcalendar .fullcalendar-agenda').ready(function(){
 setTimeout(function(){$('.fc-title').append("<button class='start'>Join</button> <button class='cancel'>Reschedule</button>");},500);
});



function ptonclick(){
      var email       = $('#email').val();
      var pass        = $('#password').val();
      var confrm_pass = $('#confirmpassword').val();
       var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (email=="" || pass=="" || confrm_pass=="") 
        {
          alert("All fields are required");
        }
        else if(pass!=confrm_pass)
        {
            alert("Password don't match !");
        }
        else if(!regex.test(email))
        {
            alert("Entet valid email id !");
        }
        else{
          document.getElementById("registercontinue").style.display = "none";
          document.getElementById("registersection").style.display = "block";
        }
}





