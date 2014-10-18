(function($)  {
$(".ds_tab_content").hide();
$("ul.ds_tabs li:first").addClass("active").show();
$(".ds_tab_content:first").show();
$("ul.ds_tabs li").click(function() {
$("ul.ds_tabs li").removeClass("active");
$(this).addClass("active");
$(".ds_tab_content").hide();
var activeTab = $(this).find("a").attr("href");
//$(activeTab).fadeIn();
if ($.browser.msie) {$(activeTab).show();}
else {$(activeTab).fadeIn();}
return false;
});
})(jQuery);

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=204007489726451&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
