<div class="col-md-12">
  <div class="section-title">
    <h1 class="section-heading">Code Activity</h1>
    <h2 class="section-subheading-nobs">Contributions Both Public and Private to Bitbucket &amp; GitHub</h2>
  </div>
</div>

<div class="clear"></div>

<div class="bitbucket-statistics">
  <?php echo $graph; ?>
  <?php echo $less_more; ?>
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
    
    <?php if (!empty($line_stats)): ?>
    <p class="lines"><b>Lines Added:</b> <?php echo number_format($lines_added, 0);?> - 
                        Lines Removed:</b> <?php echo number_format($lines_removed, 0);?> </p>
    <?php endif; ?>

    <div class="line"></div>
    <?php foreach($commits as $commit): ?>
      <?php if ($commit['is_private'] != TRUE): ?>
        <?php if ($commit['repository'] == 'bitbucket'): ?>
          <?php $commit['project'] = '<a class="bitbucket-link" href="https://bitbucket.org/' . $commit['project'] . '">' . $commit['project'] . '</a>'; ?>
        <?php else: ?>
          <?php $commit['project'] = '<a class="bitbucket-link" href="https://github.org/' . $commit['project'] . '">' . $commit['project'] . '</a>'; ?>
        <?php endif; ?>
      <?php endif; ?>
      <?php $website = NULL; ?>
      <?php if (!empty($commit['website'])) { $website = ' (<a class="bitbucket-link href="' . $commit['website'] . ' target="_new">' . $commit['website'] . '</a>)'; } ?>
      <p class="commit-line">Published <?php echo $commit['commits'];?> commits to <?php echo $commit['project'];?>. <?php echo $website;?></p>
    <?php endforeach;?>
  </div>
</div>

<br /><br />
