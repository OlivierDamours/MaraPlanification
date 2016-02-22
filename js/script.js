

function DistinctionImage()
{
  var distinction = document.getElementById('moveimage');
  if(screen.width < 1200)
  {
    distinction.style.position = "absolute";
    distinction.style.bottom = "215px";
    distinction.style.right = "10px";


  }
}

window.onresize = function()
{
  DistinctionImage();
}
