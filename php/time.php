<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script id="INLINE_PEN_JS_ID">
    var ringer = {
        //countdown_to: "10/31/2014",
        countdown_to: "01/01/2021",
        rings: {
            'JOURS': {
                s: 86400000, // mseconds in a day,
                max: 365 },

            'HEURES': {
                s: 3600000, // mseconds per hour,
                max: 24 },

            'MINUTES': {
                s: 60000, // mseconds per minute
                max: 60 },

            'SECONDES': {
                s: 1000,
                max: 60 },

            'MICRO-SEC': {
                s: 10,
                max: 100 } },


        r_count: 5,
        r_spacing: 10, // px
        r_size: 120, // px
        r_thickness: 2, // px
        update_interval: 11, // ms


        init: function () {

            $r = ringer;
            $r.cvs = document.createElement('canvas');
            let elt = document.getElementById('bloc');
            console.log(elt);
            elt.appendChild($r.cvs);

            $r.size = {
                w: ($r.r_size + $r.r_thickness) * $r.r_count + $r.r_spacing * ($r.r_count - 1),
                h: $r.r_size + $r.r_thickness };

            $r.cvs.setAttribute('width', $r.size.w);
            $r.cvs.setAttribute('height', $r.size.h);
            $r.ctx = $r.cvs.getContext('2d');
            $(document.body).append($r.cvs);
            $r.cvs = $($r.cvs);
            $r.ctx.textAlign = 'center';
            $r.actual_size = $r.r_size + $r.r_thickness;
            $r.countdown_to_time = new Date($r.countdown_to).getTime();
            $r.cvs.css({ width: $r.size.w + "px", height: $r.size.h + "px" });
            $r.go();
        },
        ctx: null,
        go: function () {
            var idx = 0;

            $r.time = new Date().getTime() - $r.countdown_to_time;


            for (var r_key in $r.rings) $r.unit(idx++, r_key, $r.rings[r_key]);

            setTimeout($r.go, $r.update_interval);
        },
        unit: function (idx, label, ring) {
            var x,y,value,ring_secs = ring.s;
            value = parseFloat($r.time / ring_secs);
            $r.time -= Math.round(parseInt(value)) * ring_secs;
            value = Math.abs(value);

            x = $r.r_size * .5 + $r.r_thickness * .5;
            x += +(idx * ($r.r_size + $r.r_spacing + $r.r_thickness));
            y = $r.r_size * .5;
            y += $r.r_thickness * .5;


            // calculate arc end angle
            var degrees = 360 - value / ring.max * 360.0;
            var endAngle = degrees * (Math.PI / 180);

            $r.ctx.save();

            $r.ctx.translate(x, y);
            $r.ctx.clearRect($r.actual_size * -0.5, $r.actual_size * -0.5, $r.actual_size, $r.actual_size);

            // first circle
            $r.ctx.strokeStyle = "#0E0E0E0";
            $r.ctx.beginPath();
            $r.ctx.arc(0, 0, $r.r_size / 2, 0, 2 * Math.PI, 2);
            $r.ctx.lineWidth = $r.r_thickness;
            $r.ctx.stroke();

            // second circle
            $r.ctx.strokeStyle = "#D84320";
            $r.ctx.beginPath();
            $r.ctx.arc(0, 0, $r.r_size / 2, 0, endAngle, 1);
            $r.ctx.lineWidth = $r.r_thickness;
            $r.ctx.stroke();

            // label
            $r.ctx.fillStyle = "#D84320";

            $r.ctx.font = '12px Helvetica';
            $r.ctx.fillText(label, 0, 23);
            $r.ctx.fillText(label, 0, 23);

            $r.ctx.font = 'bold 40px Helvetica';
            $r.ctx.fillText(Math.floor(value), 0, 10);

            $r.ctx.restore();
        } };


    ringer.init();
    //# sourceURL=pen.js
</script>