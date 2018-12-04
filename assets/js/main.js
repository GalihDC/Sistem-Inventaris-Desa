$(document).ready(function(){
  $('#loading_ajax').ajaxStart(function(){
    $(this).fadeIn();
  }).ajaxStop(function(){
    $(this).fadeOut();
  });
  $('.sidebar-menu li a').click(function(){
    var url = $(this).attr('href');
    $('#content_ajax').load(url);

  });
});
