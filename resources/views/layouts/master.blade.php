<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Expense Report</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style type="text/css">

    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

    main {
    flex: 1 0 auto;
  }

  .container {
    width: 80%
  }

  </style>

</head>
<body>
  <nav class="grey darken-3" role="navigation">
    <div class="nav-wrapper container">

      <ul class='grey darken-3'>
        <li><a href="/users" class="grey-text text-lighten-4"><i class="material-icons left">person</i>Users</a></li>
        
        <li><a href="/expenses" class="grey-text text-lighten-4"><i class="material-icons left">attach_money</i>Expenses</a></li>
        
        <li><a href="/expense-items" class="grey-text text-lighten-4"><i class="material-icons left">local_atm</i>Expense Items</a></li>
        
        <li><a href="/category" class="grey-text text-lighten-4"><i class="material-icons left">category</i>Categories</a></li>
        
        <li><a href="assets" class="grey-text text-lighten-4"><i class="material-icons left">star</i>Assets</a></li>
        
        <li><a href="departments" class="grey-text text-lighten-4"><i class="material-icons left">apartment</i>Departments</a></li>
        
        <li><a href="budget-items" class="grey-text text-lighten-4"><i class="material-icons left">monetization_on</i>Budget Items</a></li>
        <li>
          <form action="/logout" method="GET">
            <div class="center">
              <button class="btn waves-effect waves-light green"type="submit" name="action">Logout</button>
            </div>  
          </form>
        </li>

      </ul>

    </div>

  </nav>

  <main>
    @yield('content')
  </main>

  <footer class="page-footer grey darken-3"> 
    
      <div class="container center">
      <h5 class="grey-text text-lighten-4">Expense Report</h5>
      </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  

  </body>
</html>
