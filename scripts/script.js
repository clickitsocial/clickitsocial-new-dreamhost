let nav = document.getElementsByClassName("navigation")[0];
let video = document.getElementById("video");
let stickyNav = document.getElementById("ul");
let readMore = document.querySelectorAll('.readMore');

/*------Thank you page------*/
window.onload = function () {

    (function () {
        var counter = 5;

        setInterval(function () {
            counter--;
            if (counter >= 0) {
                span = document.getElementById("5");
                span.innerHTML = counter;
            }
            // Display 'counter' wherever you want to display it.
            if (counter === 0) {
                //    alert('this is where it happens');
                clearInterval(counter);
                window.location="/index.html"
            }

        }, 1000);

    })();

}


/************* Burger Nav ****************/
function myFunction(x) {
    x.classList.toggle("change");
}

function toggleHam() {
    nav.classList.toggle("responsive");
}

function toggleStickyHam() {
    stickyNav.classList.toggle("sticky-nav-toggle");
}

/************* Sticky Nav ****************/
window.addEventListener("scroll", () => {
    let navTop = video.offsetTop;
    let scrollPos = window.scrollY;

    if (scrollPos >= navTop + nav.offsetHeight) {
        nav.classList.add("navigation-fixed");
    } else {
        nav.classList.remove("navigation-fixed");
    }
})

/************What We Do Animation***********/
for (var i = 0; i < readMore.length; i++) {
    readMore[i].addEventListener("click", (e) => {
        let parentTarget = e.target.parentElement;
        parentTarget.classList.toggle("hidden");
        /*Hide Show Read More Text*/
        if (parentTarget.className.substr(-6) == "hidden") {
            e.target.innerHTML="X";
        } else {
            e.target.innerHTML="Read More";
        }
    })
}

/************* Typed.JS Jquery ****************/
var typed = new Typed('#typed', {
    strings: ["Click<span class='orange'>it</span> Social", "Your Digital Assets Service Provider"],
    typeSpeed: 60,
    backSpeed: 30,
    backDelay: 500,
    startDelay: 0,
    loop: true,
    showCursor: true
})


/************* Slider****************/
jssor_1_slider_init = function() {

    var jssor_1_SlideshowTransitions = [{
        $Duration: 800,
        x: -0.3,
        $During: {
            $Left: [0.3, 0.7]
        },
        $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
        },
        $Opacity: 2
    },
                                        {
                                            $Duration: 800,
                                            x: 0.3,
                                            $SlideOut: true,
                                            $Easing: {
                                                $Left: $Jease$.$InCubic,
                                                $Opacity: $Jease$.$Linear
                                            },
                                            $Opacity: 2
                                        }
                                       ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $Orientation: 2,
            $NoDrag: true
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 980;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};

/************* Google Maps ****************/
function initMap() {
    var myLatLng = {lat: 36.092251, lng: -115.203882};

    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 15,
        zoomControl: true,
        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: false,

        styles: [
            {elementType: 'geometry', stylers: [{color: '#333192'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#333192'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},

            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{color: '#333192'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#6b9a76'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#38414e'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{color: '#212a37'}]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9ca5b3'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#F26522'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#1f2835'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{color: '#f3d19c'}]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{color: '#2f3948'}]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{color: '#100B61'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#515c6d'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#17263c'}]
            }
        ]
    });


    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}
