<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title>Press and Hold</title>

	<style>
		#container {
			width: 100%;
			height: 350px;
			background-color: #0099FF;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			border-radius: 7px;
		}

		#celap {
			--scale-value: 1;

			width: 100px;
			height: 100px;
			background-color: #FFF;
			border: 10px solid #0066CC;
			border-radius: 50%;
			transform: scale3d(var(--scale-value), var(--scale-value), 1);
			transition: transform cubic-bezier(0.175, 0.885, 0.32, 1.275) .2s;
		}

		#celap:active {
			border-color: #003A75;
			background-color: #F2F5EA;
		}

		#celap:hover {
			cursor: pointer;
		}

	</style>
</head>

<body>

	<!-- <div id="container">
    <div id="celap">
        <p id="counter">0</p>
    </div>
  </div> -->

	<!-- <script>
    // The item (or items) to press and hold on
    var item = document.querySelector("#item");
 
    var timerID;
    var counter = 0;
 
    var pressHoldEvent = new CustomEvent("pressHold");
 
    // Increase or decreae value to adjust how long
    // one should keep pressing down before the pressHold
    // event fires
    var pressHoldDuration = 50;
 
    // Listening for the mouse and touch events    
    item.addEventListener("mousedown", pressingDown, false);
    item.addEventListener("mouseup", notPressingDown, false);
    item.addEventListener("mouseleave", notPressingDown, false);
 
    item.addEventListener("touchstart", pressingDown, false);
    item.addEventListener("touchend", notPressingDown, false);
 
    // Listening for our custom pressHold event
    item.addEventListener("pressHold", doSomething, false);
 
    function pressingDown(e) {
      // Start the timer
      requestAnimationFrame(timer);
 
      e.preventDefault();
 
      console.log("Pressing!");
    }
 
    function notPressingDown(e) {
      // Stop the timer
      cancelAnimationFrame(timerID);
      counter = 0;
 
      item.style.setProperty("--scale-value", 1);
 
      console.log("Not pressing!");
    }
 
    //
    // Runs at 60fps when you are pressing down
    //
    function timer() {
      console.log("Timer tick!");
 
      if (counter < pressHoldDuration) {
        timerID = requestAnimationFrame(timer);
        counter++;
 
        item.style.setProperty("--scale-value", 1 + counter / 50);
 
      } else {
        console.log("Press threshold reached!");
        item.dispatchEvent(pressHoldEvent);
      }
    }
 
    function doSomething(e) {
      console.log("pressHold event fired!");
    }
 
    var scale = 1 + counter / 50;
    item.style.transform = "scale3d(" + scale + ", " + scale + ", 1)";
 
  </script> -->

	<div id="container">



		<div id="celap">

			<p class="counter" hidden><?= $clap; ?></p>


		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function () {
			var clapLimit = 50;
			var i = 1,
				timeOut = 0;

			$('#celap').on('mousedown touchstart', function (e) {
				$(this).addClass('active');
				timeOut = setInterval(function () {
					if (i < clapLimit) {
						$(".counter").html(parseInt($('.counter').html()) + 1);
						$(".counter").show("fast");
					} else {
						$(".counter").show("fast");
					}
				}, 500);
			}).bind('mouseup mouseleave touchend', function () {
				$(this).removeClass('active');
				clearInterval(timeOut);
				$(".counter").hide("slow");

				$.ajax({
					type: "POST",
					url: "<?php echo base_url('Stories/autosave_celap'); ?>",
					data: {
						clapCount: parseInt($('.counter').html())
					},
					success: function (result) {
						console.log(result);
					}
				});
			});

			// function autosave(){
			// var t = setTimeout("autosave()", 1000);
			// var clap = $("#clapCount").val(); 
			//    $.ajax({
			//       type: "POST",
			//       url:"<?php echo base_url('Stories/autosave_celap'); ?>",
			//       data: {clapCount: 10},
			//       success: function(result){
			//           console.log(result);
			//       }
			//    }); 
			// } 



		})

	</script>
</body>

</html>
