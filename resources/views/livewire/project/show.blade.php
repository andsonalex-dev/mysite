<!-- component -->
<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
      <script>
        var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
            cont=1;

            break;
            }
            case 1:
            {

                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");

            cont=0;

            break;
            }


            }},8000);

    }

    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }



    function sliderButton1(){

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-purple-800");
        $("#sButton1").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=0

        }

        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-purple-800");
        $("#sButton2").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=1

        }

        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });


      </script>
    </head>

    <body>
      <div class="h-auto sliderAx">
          <div id="slider-1" class="container mx-auto">
            <div class="object-fill h-auto px-10 py-24 text-white bg-center bg-cover" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
           <div class="md:w-1/2">
            <p class="text-sm font-bold uppercase">Services</p>
            <p class="text-3xl font-bold">Hello world</p>
            <p class="mb-10 text-2xl leading-none">Carousel with TailwindCSS and jQuery</p>
            <a href="#" class="px-8 py-4 text-xs font-bold text-white uppercase bg-purple-800 rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div>
        </div> <!-- container -->
          <br>
          </div>

          <div id="slider-2" class="container mx-auto">
            <div class="object-fill h-auto px-10 py-24 text-white bg-top bg-cover" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

      <p class="text-sm font-bold uppercase">Services</p>
            <p class="text-3xl font-bold">Hello world</p>
            <p class="mb-10 text-2xl leading-none">Carousel with TailwindCSS and jQuery</p>
            <a href="#" class="px-8 py-4 text-xs font-bold text-white uppercase bg-purple-800 rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>

        </div> <!-- container -->
          <br>
          </div>
        </div>
     <div  class="flex justify-between w-12 pb-2 mx-auto">
            <button id="sButton1" onclick="sliderButton1()" class="w-4 pb-2 bg-purple-400 rounded-full " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="w-4 p-2 bg-purple-400 rounded-full"></button>
      </div>

    </body>



    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
      <!--
        Background overlay, show/hide based on slide-over state.

        Entering: "ease-in-out duration-500"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-500"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
      <section class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">
        <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
        <div class="relative w-screen max-w-md">
          <!--
            Close button, show/hide based on slide-over state.

            Entering: "ease-in-out duration-500"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-500"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4">
            <button class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
              <span class="sr-only">Close panel</span>
              <!-- Heroicon name: outline/x -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
            <div class="px-4 sm:px-6">
              <h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">
                Panel title
              </h2>
            </div>
            <div class="relative flex-1 px-4 mt-6 sm:px-6">
              <!-- Replace with your content -->
              <div class="absolute inset-0 px-4 sm:px-6">
                <div class="h-full border-2 border-gray-200 border-dashed" aria-hidden="true"></div>
              </div>
              <!-- /End replace -->
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
