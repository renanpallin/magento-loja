# Docksal powered Magento CE Installation

This is a sample vanilla Magento CE installation pre-configured for use with Docksal.

Features:

- Vanilla Magento CE
- `fin init` example

## Setup instructions

### Step #1: Docksal environment setup

**This is a one time setup - skip this if you already have a working Docksal environment.**  

Follow [Docksal environment setup instructions](http://docksal.readthedocs.io/en/master/getting-started/env-setup)

### Step #2: Project setup

1. Clone this repo into your Projects directory

    ```
    git clone https://github.com/docksal/vanilla-magento.git
    cd vanilla-magento
    ```

2. Initialize the site

    This will create administrator and install the site with `php ./magento setup:install` 

    ```
    fin init
    ```

3. Point your browser to

    ```
    http://vanilla.magento.docksal
    ```

## PHPStorm settings

Exclude next folders from index to improve performance of IDE:
```
docroot/pub/media
docroot/var

```


## More automation with 'fin init'

Site provisioning can be automated using `fin init`, which calls the shell script in [.docksal/commands/init](.docksal/commands/init).  
This script is meant to be modified per project. The one in this repo will give you a good example of advanced init script.

Some common tasks that can be handled by the init script:

- initialize local settings files for Docker Compose, Magento, etc.
- import DB or perform a site install


# Custom

## Commands

### Export admin configs to php config files
```
fin exec php bin/magento app:config:dump
```

### Backup

```
fin exec php bin/magento setup:backup --code
fin exec php bin/magento setup:backup --media
fin exec php bin/magento setup:backup --db
```

List all current backups
```
fin exec php bin/magento info:backup:list
```