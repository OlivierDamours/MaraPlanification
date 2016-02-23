

function DistinctionImage()
{
  var distinction = document.getElementById('moveimage');
  var textDistinction = document.getElementById('moveText');

  if(screen.width < 1200)
  {
    distinction.style.float = "right";
    textDistinction.style.marginRight = "30px";
  }
  else if(screen.width > 1200)
  {
    distinction.style.float = "";
    distinction.style.position = "relative";
    
    textDistinction.style.marginRight = "";

  }

}

window.onresize = function()
{
  DistinctionImage();
}
