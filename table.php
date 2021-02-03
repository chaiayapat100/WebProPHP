<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h1>The td rowspan attribute</h1>

<table>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
  </tr>
  <tr>
    <td>4</td>
    <td>5</td>
    <td rowspan="2">6</td>
  </tr>
  <tr>
    <td rowspan="2">7</td>
    <td>8</td>
  </tr>
  <tr>
    <td>9</td>
    <td>10</td>
  </tr>
</table>

</body>
</html>
