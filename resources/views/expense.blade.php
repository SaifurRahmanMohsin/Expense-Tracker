<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 90%;
                margin: 3% 2%;
            }

            .full-height {
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <h3>Expense List</h3>
        <div class="full-height">
            <table class="table table-striped">
              <thead class="thead-light">
                <tr>
                  <th>Amount</th>
                  <th>Location</th>
                  <th>Date</th>
                </tr>
              </thead>
              <?php foreach ($expenses as $expense) :?>
                  <tr>
                      <td><?php echo $expense->amount ?></td>
                      <td><?php echo $expense->place_name ?></td>
                      <td><?php echo $expense->created_at->toDayDateTimeString() ?></td>
                  </tr>
              <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>
