<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title> Tooth & Go Clinic </title>
  <style>
  body{
    font-family: verdana;
  }
  .page-break {
      page-break-after: always;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th{
    background-color: #FFDF3E;
    text-align: center;
    padding: 15px 8px;
  }
  td {
    text-align: center;
    padding: 20px 8px;
  }
  tr:nth-child(even){background-color: #f2f2f2}
/* Images Grid Styling */
* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}
/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}
.column img {
  margin-top: 8px;
  vertical-align: middle;
}
/* / Images Grid Styling */
  </style>
</head>
<body>



@yield('content')

</body>
</html>