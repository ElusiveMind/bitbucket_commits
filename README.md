# Bitbucket Commits  

** by Michael R. Bagnall - mrbagnall@icloud.com - https://twitter.com/mbagnall17 **  

Bitbucket Commits is a module for Drupal 7 that integrates with the Bitbucket API to produce an activity graph of commits to public and private Bitbucket repositories. It also calculates line addition and subtraction statistics on a per-commit basis to produce additional statistics.  

The module must be configured with the username and password of the Bitbucket user for which you wish to get private repository statistics. You must also configure which repositories are to be included in the statistics. You can also configure which repositories play into the line change calculations. These are configurable so you can include or exclude certain repositories based on their use. A repository that features a lot of third party code that is maintained elsewhere, or a forked repository may not be suitable for statistical calculation. This gives the user greater control over the accuracy of the statistics and display.  

One recent addition included is access to the GitHub API as well - so you can now pull GitHub commit statistics. Note that this does not handle other contributions such as pull requests or tickets.  

For information on configuring Bitbucket Commits for either Bitbucket or Github or both, visit the wiki at:  

https://bitbucket.org/mrbagnall/bitbucket_commits/wiki/Home  

Any questions or feature requests can be directed to: mrbagnall@icloud.com or on Twitter at @mbagnall17  