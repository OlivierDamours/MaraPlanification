

function DistinctionImage()
{
  var imageTop = document.getElementById('moveImageTop');
  var imageBotton = document.getElementById("moveImageBottom");
  var textDistinction = document.getElementById('moveText');

  if(screen.width < 1200)
  {
    imageTop.className = "imgDistinction";
    imageTop.src = "Images/notre_distinction.jpg";
    imageBotton.className = "";
    imageBotton.src = "";
    imageTop.style.float = "right";
    textDistinction.style.marginRight = "30px";
  }
  else if(screen.width > 1200)
  {
    imageBotton.className = "imgDistinction";
    imageBotton.src = "Images/notre_distinction.jpg";
    imageTop.className = "";
    imageTop.src = "";
    imageTop.style.float = "";
    imageTop.style.position = "relative";

    textDistinction.style.marginRight = "";

  }

}

window.onresize = function()
{
  DistinctionImage();
}
