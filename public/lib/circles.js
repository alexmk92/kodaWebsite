$(document).ready(function() {
    (function() {
        var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        window.requestAnimationFrame = requestAnimationFrame;
    })();

    function buildCircle(target, value) {

        // config values for the circle
        var canvas = document.getElementById(target);
        var context = canvas.getContext('2d');
        var x = canvas.width / 2;
        var y = canvas.height / 2;
        var radius = 90;
        var endPercent = value;
        var curPerc = 0;
        var circ = Math.PI * 2;
        var quart = Math.PI / 2;

        context.lineWidth = 6;
        context.strokeStyle = '#49c5af';

        // Tell the circle to animate
        function animate(current) {
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.beginPath();
            context.arc(x, y, radius, -(quart), ((circ) * current) - quart, false);
            context.stroke();
            context.font="2em varela-round";
            context.fillText((Math.floor(current * 100) + 1) + "%", 95, 128);
            curPerc++;
            if (curPerc < endPercent) {
                requestAnimationFrame(function () {
                    animate(curPerc / 100)
                });
            }
        }

        animate();
    }

    var done = false;
    $(window).scroll(function (event) {

        var stats = $("#stats").offset().top;
        var curr = $(document).scrollTop();

        var sh = $('#stats').height() * 1.5;
        console.log("Stats is at: " + (stats - sh) + ", we are at " + curr);

        if(curr >= (stats - sh) && !done)
        {
            done = true;
            buildCircle('circleA', 75);
            setTimeout(function() {
                buildCircle('circleB', 55);
            }, 500);
            setTimeout(function() {
                buildCircle('circleC', 94);
            }, 750);
            setTimeout(function() {
                buildCircle('circleD', 40);
            }, 1000);
        }

    });
});