var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function scrollHeader() {
    // Has scrolled class on header
    var zvalue = $(document).scrollTop();
    if ( zvalue > 75 )
        $("#header").addClass("scrolled");
    else
        $("#header").removeClass("scrolled");
}

function parallaxBackground() {
    $('.parallax').css('background-positionY', ($(window).scrollTop() * 0.3) + 'px');
}

jQuery(document).ready(function($){

    scrollHeader();

    // Scroll Events
    if (!isTouch){
        $(document).scroll(function() {
            scrollHeader();
            parallaxBackground();
        });
    };

    // Touch scroll
    $(document).on({
        'touchmove': function(e) {
            scrollHeader(); // Replace this with your code.
        }
    });

    //Smooth scroll to start
    $('#to-start').click(function(){
        var start_y = $('#start').position().top;
        var header_offset = 45;
        window.scroll({ top: start_y - header_offset, left: 0, behavior: 'smooth' });
        return false;
    });

    //Smooth scroll to top
    $('#to-top').click(function(){
        window.scroll({ top: 0, left: 0, behavior: 'smooth' });
        return false;
    });

    // Responsive Menu
    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('body').toggleClass('mobile-nav-open');
    });

    // Tree Menu
    $(".tree").treemenu({delay:300});



    $('.navigation-lower p').on('click', function(e) {
        e.preventDefault();

        let target = $(this).attr('id');

        $('.circuit-module').hide();
        $('.navigation-lower p').removeClass('active');

        $(target).show();
        $(target).find('.circuit-details').show();

        let track = target.replace('#', '');
        app.updateTrack(track);

        $(this).addClass('active');
    });

    //Track layout display:
    new Vue({
        el: '#app',
        data: {
            trackSvgs: {
                cota: 'user/themes/fiawec/images/Circuit_of_the_Americas.svg',
                sakhir: 'user/themes/fiawec/images/Circuit_Bahrain.svg',
                interlagos: 'user/themes/fiawec/images/Circuit_Interlagos.svg',
                'spa-francorchamps': 'user/themes/fiawec/images/Circuit_Spa-Francorchamps.svg'
            },
            svgContents: {},
            parsedSvgContents: {}, // Store parsed SVG content for all tracks
            lengths: {},
            progresses: {},
            animationIds: {},
            currentTrack: 'cota'
        },
        methods: {
            fetchAndAnimateSvg(track) {
                fetch(this.trackSvgs[track])
                    .then(response => {
                        if (!response.ok) throw new Error('Bad Response');
                        return response.text();
                    })
                    .then(data => {
                        this.svgContents[track] = data;
                        console.log(`SVG content fetched for ${track}`);
                        this.extractAndStartAnimation(track);
                    })
                    .catch(error => console.error('Error fetching SVG:', error));
            },
            extractAndStartAnimation(track) {
                const parser = new DOMParser();
                const svgDoc = parser.parseFromString(this.svgContents[track], 'image/svg+xml');
                const path = svgDoc.querySelector('path');

                if (path) {
                    this.lengths[track] = path.getTotalLength();
                    this.progresses[track] = 0;
                    console.log(`Path length for ${track} set to ${this.lengths[track]}`);

                    const animatedDot = document.createElementNS("http://www.w3.org/2000/svg", "circle");
                    animatedDot.setAttribute("r", "10");
                    animatedDot.setAttribute("fill", "#005595");
                    animatedDot.setAttribute("class", `animated-dot-${track}`);

                    svgDoc.documentElement.appendChild(animatedDot);
                    this.parsedSvgContents[track] = svgDoc; // Store parsed SVG
                    this.svgContents[track] = new XMLSerializer().serializeToString(svgDoc.documentElement);
                    console.log(`SVG content parsed and stored for ${track}`);

                    if (track === this.currentTrack) {
                        this.$nextTick(() => {
                            this.showCurrentSvg();
                            this.startAnimation(track); // Ensure animation starts only for the current track
                            console.log(`Initial SVG inserted into DOM for ${track}`);
                        });
                    }
                } else {
                    console.error(`Path element not found in SVG for ${track}`);
                }
            },
            startAnimation(track) {
                if (!this.parsedSvgContents[track]) {
                    console.error(`Parsed SVG content for ${track} is not set`);
                    return;
                }

                const animate = () => {
                    this.progresses[track] += 1;
                    if (this.progresses[track] > this.lengths[track]) {
                        this.progresses[track] = 0;
                    }

                    const pathElement = this.parsedSvgContents[track].querySelector('path');
                    if (pathElement) {
                        const point = pathElement.getPointAtLength(this.lengths[track] - this.progresses[track]);
                        const animatedDot = document.querySelector(`.animated-dot-${track}`);

                        if (animatedDot) {
                            animatedDot.setAttribute("cx", point.x);
                            animatedDot.setAttribute("cy", point.y);
                        }
                    }

                    this.animationIds[track] = requestAnimationFrame(animate);
                };
                this.animationIds[track] = requestAnimationFrame(animate);
                console.log(`Animation started for ${track}`);
            },
            stopAllAnimations() {
                Object.values(this.animationIds).forEach(id => cancelAnimationFrame(id));
            },
            updateTrack(track) {
                this.stopAllAnimations(); // Stop all animations before updating the track
                this.currentTrack = track;
                if (!this.svgContents[track]) {
                    this.fetchAndAnimateSvg(track);
                } else {
                    this.startAnimation(track); // Directly start animation if SVG is already fetched
                    this.showCurrentSvg(); // Ensure the correct SVG is shown
                }
            },
            showCurrentSvg() {
                const trackMap = document.querySelector('.track-map');
                if (trackMap && this.svgContents[this.currentTrack]) {
                    trackMap.innerHTML = this.svgContents[this.currentTrack];
                    console.log(`Current SVG content set in DOM for ${this.currentTrack}`);
                } else {
                    console.error(`SVG content for ${this.currentTrack} is not available`);
                }
            }
        },
        mounted() {
            // Fetch and animate the initial track first
            this.fetchAndAnimateSvg(this.currentTrack);
            console.log(`Initial track ${this.currentTrack} fetched and animated`);

            // Fetch and animate the other tracks
            Object.keys(this.trackSvgs).forEach(track => {
                if (track !== this.currentTrack) {
                    this.fetchAndAnimateSvg(track);
                }
            });
        },
        beforeDestroy() {
            this.stopAllAnimations();
        }
    });
});
