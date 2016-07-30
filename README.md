# BitBucket Commits #
** by Michael R. Bagnall - mbagnall@gmail.com - https://twitter.com/mbagnall17 **

BitBucket Commits is a module for Drupal 7 that integrates with the BitBucket API to produce an activity graph of commits to public and private BitBucket repositories. It also calculates line addition and subtraction statistics on a per-commit basis to produce additional statistics.  

The module must be configured with the username and password of the BitBucket user for which you wish to get private repository statistics. You must also configure which repositories are to be included in the statistics. You can also configure which repositories play into the line change calculations. These are configurable so you can include or exclude certain repositories based on their use. A repository that features a lot of third party code that is maintained elsewhere, or a forked repository may not be suitable for statistical calculation. This gives the user greater control over the accuracy of the statistics and display.

This module is not yet ready to be contributed to Drupal.org pending completion of settings features, tokens and block configurations all of which are coming. Once this is done, it will be featured here on BitBucket and on Drupal.org.

Any questions or feature requests can be directed to: mbagnall@gmail.com or on Twitter at @mbagnall17