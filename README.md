# Expense Tracker using Google Actions

## Installation
1. Clone the repository into your laptop.
2. Run `php artisan migrate` to generate the necessary tables.
3. Create an application key by running `php artisan key:generate`.
4. Create the Google Actions application using the DialogFlow console.
  * Create a new agent called expense tracker
  * Create n new intent called "Add Expense"
  * Add some training phrases like "Add expense of 500 rupees at Starbucks"
  * Mark the variables as entities. Eg. 500 as @sys.unit-currency, rupees as @sys.currency-name, Starbucks as @sys.location
  * In Integration, enable Google Assistant integration.
