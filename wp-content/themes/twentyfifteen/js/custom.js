jQuery(document).ready(function () {
  /*var url = Window.location;
  var page = url.split("/");
  var pagename = page[3];
  console.log(pagename);*/
  jQuery("#menuUl").find('li').addClass('nav-item');
  jQuery("#menuUl").find('li').find('a').addClass('nav-link');
  jQuery("#menuUl").find('li').find('a').addClass('js-scroll-trigger');
  if(jQuery("#menuUl").find('li').hasClass('current_page_item')){

  }
});
