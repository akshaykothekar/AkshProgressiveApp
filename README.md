# Akshmagento_AkshProgressiveApp for Magento 2

## How to install & upgrade Akshmagento_AkshProgressiveApp

### 1. Install via composer (recommend)

We recommend you to install Akshmagento_AkshProgressiveApp module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require akshmagento/akshprogressiveapp
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

#### 1.2 Upgrade

```
composer update akshmagento/akshprogressiveapp
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Run compile if your store in Product mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
