# Podlove Podcast Publisher

Work before progress. Feel free to touch but handle with care.

[![Flattr This][2]][1]

  [1]: http://flattr.com/thing/728463/Podlove-Podcasting-Plugin-for-WordPress
  [2]: http://api.flattr.com/button/flattr-badge-large.png (Flattr This)

## Test Setup

```
# get codeception
wget http://codeception.com/codecept.phar 

# setup a WordPress test instance with separate DB
# update tests/acceptance.suite.yml to reflect your environment
# make sure current plugin is in WordPress test instance

# create config files and adjust to your settings needs
cp tests/acceptance.suite.example.yml tests/acceptance.suite.yml
cp tests/functional.suite.example.yml tests/functional.suite.yml
cp tests/unit.suite.example.yml tests/unit.suite.yml

# finally, run the tests
php codecept.phar run
```

