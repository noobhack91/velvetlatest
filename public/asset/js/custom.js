function openCity(evt, user) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(user).style.display = "block";
  evt.currentTarget.className += " active";
}

function messagetemplatedelchk() {
  event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
  swal({
title: "Are you sure?",
text: "",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel please!",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if (isConfirm) {
form.submit();          // submitting the form when user press yes
} else {
swal("Cancelled", "User is safe :)", "error");
}
});
}

function messagetemplatedelchkpage() {
  event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
  swal({
title: "Are you sure?",
text: "",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel please!",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if (isConfirm) {
form.submit();          // submitting the form when user press yes
} else {
swal("Cancelled", "User is safe :)", "error");
}
});
}



$(document).on("submit", "#fav", function (e) {
  e.preventDefault();
  var base_url = window.location.origin;
    //var base_url = '{{URL::to("/favorite")}}';
  $.ajax({
    type:"POST",
    url:base_url+"/favorite",
    data:$(this).serialize(),
    dataType: 'json',
    success: function(result){
      if(result.status=='true' && result.code==200)
      {
        var likedval=$(".liked").val();
        
        if(likedval=='true'){
          var likedval=$(".liked").val(false);
          $("#favmatrial").css({'font-size':'30px','color':'gray'});
        }
        else{
          var likedval=$(".liked").val(true);
          $("#favmatrial").css({'font-size':'30px','color':'red'})
        }
        

        //toastr.error(result.message);
        
      }
      if(result.status=='false' && result.code==400)
      {
        toastr.error(result.message);
        window.setTimeout(function() {
          window.location=result.redirect_url;
      }, 1000);
        
      }
    },
    complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
      $('#loader .loaderimg').css({"display":"none"});
    },
    error: function(data){
      toastr.error("Something Wrong!");
    }
});
  
});


$(document).ready(function(){
	$('#videocall').click(function(){
    var base_url = window.location.origin;
    var id=$('#videocall').data("id");
    
    $.ajax({
      type:"POST",
      url:base_url+'/videocall',
      data:{'id' : id},
      dataType: 'json',
       headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(result){
        if(result.status=='true' && result.code==200)
        {
          toastr.error(result.message);
        window.setTimeout(function() {
            window.open(result.redirect_url, '_blank');
          
      }, 1000);
        }
        if(result.status=='false' && result.code==400)
        {
          toastr.error(result.message);
        
        }
      }
      
  });
	});
	
	$('.removegalimg').click(function(e){
	    
	    var base_url = window.location.origin;
	    var id=$(this).data('id');
	    
	   
	    
	     $.ajax({
      type:"GET",
      url:base_url+'/model/galary/delete/',
      data:{id},
      dataType: 'json',
       headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(result){
        if(result.status=='true' && result.code==200)
        {
          toastr.error(result.message);
        window.setTimeout(function() {
            window.open(result.redirect_url, '_blank');
          
      }, 1000);
        }
        if(result.status=='false' && result.code==400)
        {
          toastr.error(result.message);
        
        }
      }
      
  });
	    
	});
});

