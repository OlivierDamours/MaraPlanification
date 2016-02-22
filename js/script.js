

function DistinctionImage()
{
  var distinction = document.getElementById('moveimage');
  var textDistinction = document.getElementById('moveText');
  if(screen.width < 1200)
  {
    distinction.style.position = "absolute";
    distinction.style.bottom = "400px";
    distinction.style.right = "14px";
    distinction.style.width = "50%";
    distinction.style.heigth = "50%";
    textDistinction.style.width = "45%";


  }
}

window.onresize = function()
{
  DistinctionImage();
}
