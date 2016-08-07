<div class="bitbucket-statistics">
  <?php echo $graph; ?>
  <div class="statistics">
    <div class="total-commits">
      <h3>Total Commits</h3>
      <p class="commits-longest-current"><?php echo $total_commits;?></p>
    </div>
    <div class="longest-streak">
      <h3>Longest Daily Streak</h3>
      <p class="commits-longest-current"><?php echo $max_streak;?></p>
    </div>
    <div class="current-streak">
      <h3>Current Daily Streak</h3>
      <p class="commits-longest-current"><?php echo $current_streak;?></p>
    </div>
    <div class="clear"></div>
    <p class="lines"><b>Lines Added:</b> <?php echo number_format($lines_added, 0);?> - 
                        Lines Removed:</b> <?php echo number_format($lines_removed, 0);?> </p>

    <div class="line"></div>
    <?php foreach($commits as $commit): ?>
      <?php //print_r($commit); exit(); ?>
      <?php $website = NULL; ?>
      <?php if (!empty($commit['website'])) { $website = " (" . $commit['website'] . ")"; } ?>
      <p class="commit-line">Published <?php echo $commit['commits'];?> commits to <?php echo $commit['project'];?>. <?php echo $website;?></p>
    <?php endforeach;?>
  </div>
</div>
