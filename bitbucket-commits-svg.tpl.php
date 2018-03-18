<svg width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="<?php echo $class; ?>">
  <g transform="translate(<?php echo $offset_x;?>, <?php echo $offset_y;?>)">
    <?php echo $weeks; ?>
    <?php echo $month_header; ?>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="9">S</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="22">M</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="35">T</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="48">W</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="61">T</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="74">F</text>
    <text text-anchor="middle" class="wday" dx="-10" fill="#999999" dy="87">S</text>
  </g>
</svg>