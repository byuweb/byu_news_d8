# BYU News Drupal 8 Module
This Drupal 8 module allows users to place a block on their page which displays the [BYU News Web Component](https://github.com/byuweb/byu-news-components).

## Installation, Use & Configuration

### Installation
1. Clone or download this repo into your project (If you download it, make sure to remove '-master' from the module folder name)
2. Install the module on your Drupal site
3. Place the BYU News block on your page


### Configuration (Optional)
The BYU News web component looks something like (See the [BYU News Web Components Repo](https://github.com/byuweb/byu-news-components) for more information):
```html
<byu-news categories="all" tags="all" max-date="2017-07-01" min-date="2017-04-01" story-limit="3"></byu-news>
```
This module uses variables to define each of the attributes listed above. The variables are:
* defined in ```[BYU_NEWS_D8 Root]/byu_news.module```
* initialized in ```[BYU_NEWS_D8 Root]/src/Plugin/Block/ByuNewsBlock.php```
* and implemented in ```[BYU_NEWS_D8 Root/templates/byu-news.html.twig```

Default values are:
* `categories: 2975` 
* `tags: all`
* `min-date: today`
* `max-date: 1 month prior`
* `story-limit: 3`
