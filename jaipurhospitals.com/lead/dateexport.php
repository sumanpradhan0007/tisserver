<?php 

include('connect.php');

session_start();

if(!$_SESSION['username']){

    header("Location: Logoutadmin.php");

    exit;

}

?>





<!DOCTYPE html>

<html>

<head>

  <title>Hospital Khojo Panel</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery UI CSS -->

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<!-- Optional theme -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->



</head>

<body>



<div class="container">

 <div class="alert alert-success">

  <strong><?php echo $_SESSION['username'];?>!</strong> | <a title="" href="Logoutadmin.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>



</div>

  <div class="row">

    <div class="col-sm-12">

        <form method='post' action=''>



     <!-- Datepicker -->

     <input type='text' class='datepicker' placeholder="From date" name="from_date" id='from_date' readonly>

     <input type='text' class='datepicker' placeholder="To date" name="to_date" id='to_date' readonly>



     <!-- Export button -->

     <input type='submit' class="btn btn-success" value='Filter' name='Filter'>

   </form> 

       <br><br>

<div class="table-responsive">

<table id="example" class="display nowrap" style="width:100%">

        <thead>

            <tr>

               <th>S.No</th>

                <th>Name</th>

                <th>Email</th>

                <th>Phone</th>

                <th>City</th>

                <th>Message</th>

                <th>Specialities</th>

                <th>Prefered Date</th>

                <th>Date</th>

                <th>Source</th>

                <th>Medium</th>

                <th>Campaign</th>

            </tr>

        </thead>

        <tbody>

          <?php  

          $query="SELECT * FROM lead ORDER BY leadID DESC limit 100";
			
		if(isset($_POST['from_date']) && isset($_POST['to_date'])){

		  $query = "SELECT * FROM lead WHERE entDate between '".$_POST['from_date']." 00:00:00' and '".$_POST['to_date']." 23:59:59' ORDER BY leadID asc";

		}

          $res=mysqli_query($con,$query);

          while ($row=mysqli_fetch_array($res)) {

            ?>

           

         

            <tr>

                 <td><?php echo $row['leadID'];?></td>

                 <td><?php echo $row['fname'];?></td>

                 <td><?php echo $row['email'];?></td>

                 <td><?php echo $row['phone'];?></td>

                 <td><?php echo $row['city'];?></td>

                 <td><?php echo $row['message'];?></td>

                 <td><?php echo $row['speciality'];?></td>

                 <td><?php echo $row['preferred_date'];?></td>

                 <td><?php echo $row['entDate'];?></td>

                 <td><?php echo $row['utm_source'];?></td>

                 <td><?php echo $row['utm_medium'];?></td>

                 <td><?php echo $row['utm_campaign'];?></td>

            </tr>

           <?php

            }

          ?>

           

        </tbody>

       

    </table>

  </div>

    </div>

  </div>

</div>

  



    <script src=""></script>











    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

    <!-- jQuery UI JS -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>

      $(document).ready(function() {

    $('#example').DataTable( {
		dom: 'Bfrtip',
		lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        order: [[0, 'desc']],
		buttons: [ 'pageLength', 'copy', 'excel', 'pdf' ]

    } );

} );





$(document).ready(function(){



   // From datepicker

   $("#from_date").datepicker({ 

      dateFormat: 'yy-mm-dd',

      changeYear: true,

      onSelect: function (selected) {

         var dt = new Date(selected);

         dt.setDate(dt.getDate() + 1);

         $("#to_date").datepicker("option", "minDate", dt);

      }

   });



   // To datepicker

   $("#to_date").datepicker({

      dateFormat: 'yy-mm-dd',

      changeYear: true,

      onSelect: function (selected) {

         var dt = new Date(selected);

         dt.setDate(dt.getDate() - 1);

         $("#from_date").datepicker("option", "maxDate", dt);

      }

   });

});

    </script>

    

    

   

















</body>

</html>