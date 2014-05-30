

<html>
<head>
<title>BrodeHouse Camerieri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bgrTheme.css">
<link rel="stylesheet" href="jquery.mobile-1.4.2.css">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.mobile-1.4.2.min.js"></script>

</head>
<body>
    <div data-role="page" id="mainPage">
        <div data-role="header">
            <h1>Tavoli</h1>
        </div>
        <div data-role="content">
            <table data-role="table" id="my-table" data-mode="reflow">
  <thead>
    <tr>
      <th>ID</th>
      <th>Stanza</th>
      <th>Posti</th>
      <th>Occupato?</th>
      <th>Numero di scarpe</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>Sud</td>
      <td>10</td>
      <td> <input type="checkbox" data-role="flipswitch" name="switch" id="switch" data-on-text="Si" data-off-text="No"></td>
      <td>0</td>
    </tr>
    </tbody>
</table>
        </div>
    </div>

</body>
</html>

