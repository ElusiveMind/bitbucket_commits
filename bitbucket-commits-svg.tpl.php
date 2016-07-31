<svg width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="<?php echo $class; ?>">
  <g transform="translate(<?php echo $offset_x;?>, <?php echo $offset_y;?>)">
    <?php echo $weeks; ?>
    <?php echo $month_header; ?>
    <text text-anchor="middle" class="wday" dx="-10" dy="9" style="display: none;">S</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="22">M</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="35" style="display: none;">T</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="48">W</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="61" style="display: none;">T</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="74">F</text>
    <text text-anchor="middle" class="wday" dx="-10" dy="87" style="display: none;">S</text>
  </g>
</svg>