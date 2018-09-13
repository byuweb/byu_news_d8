# BYU News Drupal 8 Module
This Drupal 8 module allows users to place a block on their page which displays the [BYU News Web Component](https://github.com/byuweb/byu-news-components).

## Installation, Use & Configuration

### Installation
1. Get this Module from drupal.org (via composer)
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
BYU News Drupal 8 Module
This module pulls in the recent news articles for the Academic Category. It creates a block listing the 3 most recent Academic news articles. 
You can see a demonstration of this module on the BYU homepage: https://www.byu.edu/academics

## Next Updates to This Module
We'd like to add the category option so there can be multiple news blocks and each could have a configuration option for which category to use and how many news articles to list.
