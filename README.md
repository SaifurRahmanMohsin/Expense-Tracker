# Expense Tracker using Google Actions

#### Installation

1. Clone the repository into your laptop.
2. Run `php artisan migrate` to generate the necessary tables.
3. Create an application key by running `php artisan key:generate`.
4. Create the Google Actions application using the DialogFlow console.
  * Create a new agent called expense tracker
  * Create n new intent called "Add Expense"
  * Add some training phrases like "Add expense of 500 rupees at Starbucks"
  * Mark the variables as entities. Eg. 500 as @sys.unit-currency, Starbucks as @sys.location
5. Deploy the web app online or run a private server or a DNS server to expose the app online.
6. Copy the API URL as `myapp.com/api/addexpense`. In fulfillment section of the DialogFlow console, enable web hook and paste this URL.
7. For testing, In Integration, enable Web Demo integration. Now replace the Web Demo integration code into the /resources/views/welcome.blade.php and then run the query from there.
8. See myapp.com/list to find the list of expenses made.

Demonstration of the app:

[![Demo of Expense Tracker](http://img.youtube.com/vi/oqunD20LKCo/0.jpg)](http://www.youtube.com/watch?v=oqunD20LKCo "Demo of Expense Tracker")

#### Example Output:
![Screenshot](https://i.imgur.com/hrhJxiE.png)

**Response Code**
```
array (
  'responseId' => '1d0162fc-be2a-4376-879d-3797f050b7eb',
  'queryResult' =>
  array (
    'queryText' => 'Mainland China',
    'parameters' =>
    array (
      'unit-currency' => NULL,
      'currency-name' => NULL,
      'location' =>
      array (
        'city' => 'Mainland',
        'country' => 'China',
      ),
    ),
    'allRequiredParamsPresent' => true,
    'fulfillmentText' => 'Sure, I’ve written that down!',
    'fulfillmentMessages' =>
    array (
      0 =>
      array (
        'text' =>
        array (
          'text' =>
          array (
            0 => 'You don’t say!',
          ),
        ),
      ),
    ),
    'outputContexts' =>
    array (
      0 =>
      array (
        'name' => 'projects/expense-tracker-e81f2/agent/sessions/37592429-2f8b-3ae9-9592-666c1f183cb7/contexts/080beafd-7af9-44cc-bd1d-d85ba528af3c_id_dialog_context',
        'lifespanCount' => 1,
        'parameters' =>
        array (
          'currency-name.original' => NULL,
          'location.original' => 'Mainland China',
          'unit-currency' => NULL,
          'unit-currency.original' => NULL,
          'location' =>
          array (
            'city' => 'Mainland',
            'city.original' => 'Mainland',
            'country' => 'China',
            'country.original' => 'China',
          ),
          'currency-name' => NULL,
        ),
      ),
      1 =>
      array (
        'name' => 'projects/expense-tracker-e81f2/agent/sessions/37592429-2f8b-3ae9-9592-666c1f183cb7/contexts/add_expense_dialog_params_location',
        'parameters' =>
        array (
          'currency-name.original' => NULL,
          'location.original' => 'Mainland China',
          'unit-currency' => NULL,
          'unit-currency.original' => NULL,
          'location' =>
          array (
            'city' => 'Mainland',
            'city.original' => 'Mainland',
            'country' => 'China',
            'country.original' => 'China',
          ),
          'currency-name' => NULL,
        ),
      ),
      2 =>
      array (
        'name' => 'projects/expense-tracker-e81f2/agent/sessions/37592429-2f8b-3ae9-9592-666c1f183cb7/contexts/add_expense_dialog_context',
        'lifespanCount' => 1,
        'parameters' =>
        array (
          'currency-name.original' => NULL,
          'location.original' => 'Mainland China',
          'unit-currency' => NULL,
          'unit-currency.original' => NULL,
          'location' =>
          array (
            'city' => 'Mainland',
            'city.original' => 'Mainland',
            'country' => 'China',
            'country.original' => 'China',
          ),
          'currency-name' => NULL,
        ),
      ),
    ),
    'intent' =>
    array (
      'name' => 'projects/expense-tracker-e81f2/agent/intents/080beafd-7af9-44cc-bd1d-d85ba528af3c',
      'displayName' => 'Add Expense',
    ),
    'intentDetectionConfidence' => 1.0,
    'diagnosticInfo' =>
    array (
    ),
    'languageCode' => 'en',
  ),
  'originalDetectIntentRequest' =>
  array (
    'payload' =>
    array (
    ),
  ),
  'session' => 'projects/expense-tracker-e81f2/agent/sessions/37592429-2f8b-3ae9-9592-666c1f183cb7',
)
```
![Expense Listing](https://i.imgur.com/5Wq8R6k.png)
