## Quotester Documentation

Quotester is a small web app developed in Laravel and Vue, designed to make finding inspiring and isightful quotes a breeze. Check out the live demo [here](http://54.81.10.117/).

### Routes

**Random**
*/quotes/random*

**Quote of the Day**
*/quotes/quotd*

You can change the date by supplying a date parameter (ex. */quotes/quotd?d=10-2-2020*).

**Search**
*/quotes/search* 

Pass the term to search for in the q parameter (ex. */quotes/search?q=bugs*)

### Installation

Ensure that your machine is running PHP 5.6. If you have Valet running on your machine, simply do the following.
- Clone the repo to your parked folder.
- Run `composer install`
- Run `npm install`
- And finally `npm run watch`

### File Structure
To make the project a little easier to navigate, I've included this guide as a roadmap. 

**Routes**
All routes are kept in...
- routes/web.php

**Model**
The Quote Class acts as the application's only model.
- app/Quote.php

**Controller**
The only Controller in the App is the QuoteController.  All business logic is performed by the Quote Class.
- app/Http/Controllers/QuoteController.php

**Views**
Quotester uses the Vue.js framework to generate the frontend of the App. The main component of the Vue App is Quote.vue. Quote.vue uses two smaller components as buttons for calling the 'Quote of the Day' and 'Random Quote' functions.
- resources/views/home.blade.php
- resources/views/layouts/app.blade.php
- resources/assets/js/components/Quote.vue
- resources/assets/js/components/buttons/Quotd.vue
- resources/assets/js/components/buttons/Random.vue

**Vuex State**
State is managed in the store folder. 
- resources/assets/js/store/index.js