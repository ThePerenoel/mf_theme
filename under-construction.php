<?php

/**
  Template Name: Under Construction
 */

get_header(); ?>


<main role="main" class="container">

  <div class="starter-template">

    <div class="row" style="text-align:center; height:500px;font-size:1.5em;">
        <p id="under_construction" style="width:100%; margin:auto;">
          Site en construction
          <span id="first">.<span>
            <span id="second">.<span>
              <span id="third">.<span>
        </p>
    </div>

  </div>

</main>

<script>

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function animate() {
  while (true) {
    document.getElementById("first").style.color = "black";
    document.getElementById("second").style.color = "black";
    document.getElementById("third").style.color = "black";
    await sleep(1000);
    document.getElementById("first").style.color = "white";
    await sleep(1000);
    document.getElementById("second").style.color = "white";
    await sleep(1000);
    document.getElementById("third").style.color = "white";
    await sleep(1000);
  }

}

animate();

</script>

<?php get_footer(); ?>
