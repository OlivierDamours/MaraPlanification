
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
    imageTop.style.maxWidth = "400px";
    imageTop.style.maxHeight = "300px";
    textDistinction.style.marginRight = "10px";

    //The screen width will change the image position
    if(screen.width >= 990)
    {
      imageTop.style.marginRight = "";
    }
    else if(screen.width < 990 && screen.width > 642)
    {
      imageTop.style.marginTop = "0.5em";
      imageTop.style.marginRight = "3em";
      imageTop.style.marginBottom = "2em";
    }
    else if(screen.width <= 641 && screen.width >= 550)
    {
      imageTop.style.maxWidth = "270px";
      imageTop.style.maxHeight = "180px";
      imageTop.style.marginRight = "2.6em";
      imageTop.style.marginLeft = "2.6em";
      imageTop.style.marginBottom = "2.6em";
    }
    else if(screen.width <= 549 && screen.width >= 415)
    {
      imageTop.style.maxWidth = "270px";
      imageTop.style.maxHeight = "180px";
      imageTop.style.marginRight = "2em";
      imageTop.style.marginLeft = "1.6em";
      imageTop.style.marginBottom = "2.6em";
    }
    else if (screen.width == 414)
    {
      imageTop.style.maxWidth = "200px";
      imageTop.style.maxHeight = "170px";
      imageTop.style.marginRight = "2em";
      imageTop.style.marginLeft = "2em";

    }
    else if(screen.width == 384)
    {
      imageTop.style.marginRight = '1em';
    }
    else if(screen.width == 375)
    {
      imageTop.style.maxWidth = "190px";
      imageTop.style.maxHeight = "160px";
      imageTop.style.marginRight = "1em";
      imageTop.style.marginBottom = "1em";
    }
    else if(screen.width == 360)
    {
      imageTop.style.marginRight = '2.8em';
    }
    else if(screen.width == 320)
    {
      imageTop.style.maxWidth = "150px";
      imageTop.style.maxHeight = "120px";
      imageTop.style.marginRight = "1.1em";
      imageTop.style.marginLeft = "0.5em";
    }





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
    imageBotton.style.marginLeft= "5.5em";

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
$('.color').click(function()
{
  location.reload();
});
