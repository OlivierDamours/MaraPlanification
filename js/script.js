
//Function to work the image used for the distinction page
function DistinctionImage()
{
  var boostrapRemoval = document.getElementById("secondImage");
  //get the image to the top
  var imageTop = document.getElementById('moveImageTop');
  //get the image to the bottom
  var imageBotton = document.getElementById("moveImageBottom");
  //get the text area I need to work with to make sure the float works well
  var textDistinction = document.getElementById('moveText');
  //The treshold for the screen resize position
  if(screen.width < 1200)
  {
    //Remove the bottom image informations to leave the top as the only image present
    imageTop.className = "imgDistinction";
    imageTop.src = "Images/notre_distinction.jpg";
    imageBotton.className = "";
    imageBotton.src = "";
    imageTop.style.float = "right";
    bootstrap.className = "";
    textDistinction.style.marginRight = "30px";
  }
  else if(screen.width > 1200)
  {
    //Remove the top image to put the bottom image in action

    imageTop.className = "";
    imageTop.src = "";

    imageBotton.className = "imgDistinction";
    imageBotton.src = "Images/notre_distinction.jpg";
    boostrapRemoval.className = "col-md-5";
    imageTop.style.float = "";

    textDistinction.style.marginRight = "";
  }

}

window.onresize = function()
{
  DistinctionImage();
}
window.onload = function()
{
  DistinctionImage();
}
