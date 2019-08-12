//jQuery hide when page has finished loading.
$(window).on('load', function() {
  $('.overlay-loader').fadeOut('slow');
});

//BEGIN JIVOSITE CODE {literal}
(function(){ var widget_id = 'IpNsNdPp0z';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
//{/literal} END JIVOSITE CODE
