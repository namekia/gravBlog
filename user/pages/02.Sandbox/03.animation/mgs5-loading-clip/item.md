---
title: MGS5 Loading Animation
date: 02/09/2016 01:51pm
author: Gregory Chambers
taxonomy:
    category: blog
    tag: [gsap, javascript]
---

This little animation sequence was inspired by the "saving" interface animations in the video game _Metal Gear Solid 5: Phantom Pain_.

<div class="main">

  <div class="matrix-wrap">
    <div class="matrix-sqr sqr01"></div>
    <div class="matrix-sqr sqr02"></div>
    <div class="matrix-sqr sqr03"></div>
    <div class="matrix-sqr sqr04"></div>
  </div>
  <div class="circ-wrap">
    <div class="txt-loading">SAVING...</div>
    <div class="circ-arcs" id="el-a"></div>
    <div class="circ-gradient" id="el-g"></div>
    <div class="txt-numbers" id="numberDisplay">012345</div>
    <div class="txt-chckpnt">CHECKPOINT</div>
  </div>

</div>

<div class="btn-wrap">
  <button type="button" name="replay" id="replay">Re-Play</button>
</div>

I've sat through this <i>MSG5</i> user-interface device many times througout my hours of game-play. The complex set of movements always intrigued me. Consequently, I set a challange for myself &mdash; replicate this sequence on the web using HTML, CSS and JavaScript.
This is the result.
