window.addEventListener('scroll', function(){

  var scrolling = window.pageYOffset;
  var element = document.querySelector('header');

  if(scrolling > 100){
    element.style.background = "#0B0B3B";
    element.style.color = "#fff";
    element.style.zIndex = "1";
    element.style.width = "100%";
    element.style.opacity = ".8";
    element.style.transitionDuration = "1s";
    element.style.padding = "5px";
    element.style.fontSize = "70%";
    element.style.textAlign = "left";
    element.style.paddingLeft = "35px";
  }else{
    element.style.background = "#0B0B3B";
    element.style.color = "#fff";
    element.style.zIndex = "1";
    element.style.width = "70%";
    element.style.transitionDuration = "1s";
    element.style.padding = "30px";
    element.style.opacity = ".6";
    element.style.fontSize = "130%";
    element.style.textAlign = "center";
  }


});