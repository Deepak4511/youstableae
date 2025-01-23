<style>
    :root {
        --bg: hsl(0 0% 2%);
        --color: hsl(0 0% 100% / 0.1);
        --underline-width: 1lh;
        --underline-block-width: 250vmax;
        --underline-color: hsl(0 0% 50% / 0.15);
        --underline-color-hover: hsl(180 100% 50% / 1);
        --underline-transition: 5s;
        --finish-fill: hsl(0 0% 100%);
        --accent: hsl(0 0% 100%);
        --fill: hsl(100% 0% 50%);
    }

    .dsdd {
        -webkit-accent-color: none;
        /* Vendor prefix for Safari */
        overflow-x: hidden;
    }

    .text-p {
        position: sticky;
        top: 0;
        overflow-x: hidden;
        margin: 0 auto;
        /* Center the text */
        text-align: center;
        max-width: 60vw;
    }

    .text-p>span {
        transition: color 10s ease-in-out;
        font-size: 58px;
        color: var(--color);
        text-decoration: none;
        background-image: linear-gradient(90deg, #6b46f2 calc(100% - 8ch), hsl(252.8deg 87.21% 66.27%) calc(100% - 8ch)), linear-gradient(90deg, hsl(252.91deg 100.87% 61.18%), hsl(252.96deg 100% 60.98%)), linear-gradient(90deg, hsl(0deg 0% 67.12%), hsl(0deg 0% 86.8%));
        background-size: var(--underline-block-width) var(--underline-width),
            var(--underline-block-width) var(--underline-width),
            100% var(--underline-width);
        background-repeat: no-repeat;
        background-position-x: 0;
        background-position-y: 100%;
        -webkit-background-clip: text;
        /* Safari */
        -webkit-text-fill-color: transparent;
        /* Safari */
        color: transparent;
        /* Safari */
        font-weight: 400;
    }

    main {
        height: 100vh;
    }

    .section-p {
        position: sticky;
        top: 80px;
        height: 55vh;
        display: grid;
        place-items: center;
    }

    @supports (animation-timeline: scroll()) {
        @media (prefers-reduced-motion: no-preference) {
            main {
                view-timeline-name: --section;
            }

            .text-p>span {
                transition: color 10s ease-in-out;
                background-position-x:
                    calc(var(--underline-block-width) * -1),
                    calc(var(--underline-block-width) * -1),
                    0;
                -webkit-background-clip: text;
                /* Safari */
                -webkit-text-fill-color: transparent;
                /* Safari */
                color: transparent;
                /* Safari */
                animation-name: fill-up, color-in;
                animation-fill-mode: both;
                animation-timing-function: ease-in;
                animation-timeline: --section;
                animation-range: entry 0% cover 100%, cover 71% exit 97%;
            }

            @keyframes fill-up {
                to {
                    background-position-x: 0, 0, 0;
                    transition: color 10s ease-in-out;
                }
            }

            @keyframes color-in {
                to {
                    color: var(--finish-fill);
                }
            }
        }
    }

    @media only screen and (max-width: 768px) {
        .text-p>span {
            transition: color 10s ease-in-out;
            font-size: 28px;
            color: var(--color);
            text-decoration: none;
            background-image: linear-gradient(90deg, #6b46f2 calc(100% - 8ch), hsl(252.8deg 87.21% 66.27%) calc(100% - 8ch)), linear-gradient(90deg, hsl(252.91deg 100.87% 61.18%), hsl(252.96deg 100% 60.98%)), linear-gradient(90deg, hsl(0deg 0% 67.12%), hsl(0deg 0% 86.8%));
            background-size: var(--underline-block-width) var(--underline-width),
                var(--underline-block-width) var(--underline-width),
                100% var(--underline-width);
            background-repeat: no-repeat;
            background-position-x: 0;
            background-position-y: 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            font-weight: 400;
        }

        img.start-review-image {
            width: 42%;
            position: relative;
            bottom: 3px;
        }

        .text-p {
            position: sticky;
            top: 0;
            overflow-x: hidden;
            margin: 0 auto;
            text-align: center;
            max-width: 87%;
        }

        main {
            height: 35vh;
        }

        .section-p {
            position: sticky;
            top: 80px;
            height: auto;
            display: grid;
            place-items: center;
        }
    }
</style>


<body class="dsdd">
    <div class="cont"></div>
    <main>
        <section class="section-p">
            <p class="text-p">
                <span>Youstable is rated Excellent with <img src="assets/img/review-start-img.png"
                        alt="stars" class="start-review-image"><em class="fw-bold" style="color:#6B46F2;"> 4.7 </em> out
                    of 5 Stars based on<span class="fw-bold font-style-italic  "> 135+ reviews</span> from
                    Trustpilot</span>
            </p>
        </section>
    </main>
</body>
<script src="js/gsap/gsap.min.js"></script>
<script src="js/gsap/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Define the list of words to color
    const wordsToColor = document.querySelectorAll('.text-p > span');

    wordsToColor.forEach((word, index) => {
        gsap.to(word, {
            color: 'var(--finish-fill)', // Final color to fill the word
            duration: 5, // Adjust the duration for slower color filling
            scrollTrigger: {
                trigger: word,
                start: 'top bottom', // Adjust start position if needed
                end: 'center center', // Adjust end position if needed
                scrub: 0.5, // Adjust scrub value for slower animation
                markers: true, // Optional: Show markers for testing
                onUpdate: () => {
                    // Expand the screen progressively as words color
                    const screenHeight = window.innerHeight;
                    const expandedHeight = screenHeight * (index +
                        1); // Increase height based on word index
                    document.body.style.height = `${expandedHeight}px`;
                },
                onEnter: () => {
                    // Additional actions when the word enters the viewport
                },
                onLeaveBack: () => {
                    // Additional actions when the word leaves the viewport from bottom
                },
            },
            delay: index * 0.5, // Add a delay to stagger the color transitions
        });
    });
</script>