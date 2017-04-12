<?php

$landscape = '
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
  <style type="text/css">
    
  .sky{fill:#9DDDF4;}
  .earth{fill:#707F5E;}
  .barn-building{fill:#961E1E;}
  .barn-roof{fill:#9E9E9E;}
  .barn-interior{fill:#020202;}
  .barn-door-left{fill:#660A0A;}
  .barn-door-right{fill:#660A0A;}
  .windmill-pole{fill:#3A1C04;}
  .windmill-fan{fill:#9E9E9E;}

  </style>
      <rect class="sky" width="800" height="600"/>
      <path class="earth" d="M0 317c54.7-21.4 132.1-96.4 324-98s241.6 110.1 359 106 117 5.1 117 5.1V600H-1L0 317z"/>
    <rect x="291" y="171.5" class="barn-building" width="155" height="155"/>
    <polygon class="barn-roof" points="291 171.5 337 132 368.5 120 400 134 446 171.5 "/>
    <rect x="324.2" y="267" class="barn-interior" width="97.7" height="59.5"/>
    <rect x="324.2" y="267" class="barn-door-left" width="48.9" height="59.5"/>
    <rect x="373" y="267" class="barn-door-right" width="48.9" height="59.5"/>
    <rect x="535.3" y="209.3" class="windmill-pole" width="8" height="196"/>
    <path class="windmill-fan" d="M539.3 223.5l14.4 14.4c3-1.5 5.7-3.5 8.2-5.9 1.9-1.9 3.5-4 4.9-6.2l-14.9-14.9 16-16c-1.5-3-3.5-5.7-5.9-8.2 -2.5-2.5-5.2-4.4-8.2-5.9l-16 16 -14.9-14.9c-2.2 1.3-4.3 2.9-6.2 4.9 -2.4 2.4-4.3 5-5.8 7.9l14.5 14.5 -14.7 14.7c1.5 3 3.5 5.7 5.9 8.2 2.5 2.5 5.2 4.4 8.2 5.9L539.3 223.5z"/>
</svg>
';

echo $landscape;