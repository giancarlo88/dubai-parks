// canvasWidth = document.getElementById("js-container").style.width*0.3,
// canvasHeight = document.getElementById("js-container").style.height*0.3,
canvasWidth = $("#js-container").width()*0.3
canvasHeight = $("#js-container").height()*0.3


imgLoadedWidth  = 0;
imgLoadedHeight = 0;


  
  function scratchPad(canvasid, imgFile) {
  
  var isDrawing, lastPoint;
  var container    = document.getElementById('js-container'),
      canvas       = document.getElementById(canvasid),
      ctx          = canvas.getContext('2d'),
      brush        = new Image();
      image        = new Image(),
  // base64 Workaround because Same-Origin-Policy\
  image.src = imgFile;

  image.onload = function() {
    alert(this.width + 'x' + this.height);
  }

  
  
  image.onload = function() {
    ctx.drawImage(image, 0, 0, image.naturalWidth, image.naturalHeight, 0, 0, image.naturalWidth, image.naturalHeight);
    // Show the form when Image is loaded.
    //document.querySelectorAll('.form')[0].style.visibility = 'visible';
  };

  imgLoadedWidth = image.naturalWidth;
  imgLoadedHeight = image.naturalHeight;

  $(".canvas").attr("width", image.naturalWidth);
  $(".canvas").attr("height", image.naturalHeight);

  brush.src = "circle.png"
  
  canvas.addEventListener('mousedown', handleMouseDown, false);
  canvas.addEventListener('touchstart', handleMouseDown, false);
  canvas.addEventListener('mousemove', handleMouseMove, false);
  canvas.addEventListener('touchmove', handleMouseMove, false);
  canvas.addEventListener('mouseup', handleMouseUp, false);
  canvas.addEventListener('touchend', handleMouseUp, false);
  
  function distanceBetween(point1, point2) {
    return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
  }
  
  function angleBetween(point1, point2) {
    return Math.atan2( point2.x - point1.x, point2.y - point1.y );
  }
  
  // Only test every `stride` pixel. `stride`x faster,
  // but might lead to inaccuracy
  function getFilledInPixels(stride) {
    if (!stride || stride < 1) { stride = 1; }
    
    var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
        pdata    = pixels.data,
        l        = pdata.length,
        total    = (l / stride),
        count    = 0;
    // Iterate over all pixels
    for(var i = count = 0; i < l; i += stride) {
      if (parseInt(pdata[i]) === 0) {
        count++;
      }
    }
    
    return Math.round((count / total) * 100);
  }
  
  function getMouse(e, canvas) {
    var offsetX = 0, offsetY = 0, mx, my;

    if (canvas.offsetParent !== undefined) {
      do {
        offsetX += canvas.offsetLeft;
        offsetY += canvas.offsetTop;      } 
        while ((canvas = canvas.offsetParent));
    }
    
    mx = (e.pageX || e.touches[0].clientX) - offsetX;
    my = (e.pageY || e.touches[0].clientY) - offsetY;
    
    return {x: mx, y: my};
  }
  
  function handlePercentage(filledInPixels) {
    filledInPixels = filledInPixels || 0;
    console.log(filledInPixels)
    if (filledInPixels > 50) {
      canvas.parentNode.removeChild(canvas);
      getSecretNumber(canvas.id);
    }
  }
  
  function handleMouseDown(e) {
    isDrawing = true;
    lastPoint = getMouse(e, canvas);
  }

  function handleMouseMove(e) {
    if (!isDrawing) { return; }
    
    e.preventDefault();

    var currentPoint = getMouse(e, canvas),
        dist = distanceBetween(lastPoint, currentPoint),
        angle = angleBetween(lastPoint, currentPoint),
        x, y;
    
    for (var i = 0; i < dist; i++) {
      x = lastPoint.x + (Math.sin(angle) * i) - 25;
      y = lastPoint.y + (Math.cos(angle) * i) - 25;
      ctx.globalCompositeOperation = 'destination-out';
      ctx.drawImage(brush, x, y);
    }
    
    lastPoint = currentPoint;
    handlePercentage(getFilledInPixels(32));
  }

  function handleMouseUp(e) {
    isDrawing = false;
  }
  
};

function getSecretNumber(id) {
  var position = id.charAt(id.length-1);
  var idTag = "#scratch__mystery-number" + position;
  updateNumbers(idTag, position);
}

function updateNumbers(tag, position) {
  console.log(tag, position)
  switch (position) {
    case "2" :
    case "3" :
    case "5" :
      $(tag).html("1").fadeIn(1000);
      break;
    case "1":
    case "4":
      $(tag).html("0").fadeOut().fadeIn(1000);
      break;
    case "6":
      $(tag).fadeOut().html("6").fadeIn(1000);
      break;
  }
}

tmpImage = new Image();
tmpImage.src = "scratch-texture-large.jpg";

window.onresize = function() {
  canvasWidth  = $("#js-container").width()*0.3;
  canvasHeight = $("#js-container").height()*0.3;

  counter = 0;

  
  console.log(tmpImage);

  while (counter < 6) {
    ctx = $(".canvas")[counter].getContext('2d');
    ctx.canvas.width = canvasWidth;
    ctx.canvas.height = canvasHeight;
      ctx.drawImage(tmpImage, 0, 0, tmpImage.naturalWidth, tmpImage.naturalHeight, 0, 0, tmpImage.naturalWidth, tmpImage.naturalHeight);

    counter++;
  }
    console.log(canvasWidth);
    console.log(canvasHeight);
  }

window.onload = function() {
 var scratchSize;
 console.log(screen.width)
 if (screen.width >= 800) 
 {scratchSize = "scratch-texture-large.jpg";
 }

  scratchPad("js-canvas1", scratchSize);
  scratchPad("js-canvas2", scratchSize);
  scratchPad("js-canvas3", scratchSize);
  scratchPad("js-canvas4", scratchSize);
  scratchPad("js-canvas5", scratchSize);
  scratchPad("js-canvas6", scratchSize);
}