

function DistinctionImage()
{
  var distinction = document.getElementById('moveimage');
  var textDistinction = document.getElementById('moveText');
  if(screen.width < 1200)
  {
    distinction.style.position = "absolute";
    distinction.style.bottom = "215px";
    distinction.style.right = "10px";
    distinction.style.width = "50%";
    distinction.style.heigth = "50%";
    textDistinction.style.width = "50%";


  }
}

window.onresize = function()
{
  DistinctionImage();
}
