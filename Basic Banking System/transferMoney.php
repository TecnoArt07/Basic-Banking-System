<?php
  include 'navBar.php';
?>
<br><br>
<?php
    include 'Config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<style>
       .dataTables_length,
        .dataTables_wrapper {
          font-size: 1rem;
        }
        .dataTables_length select,
        .dataTables_length input,
        .dataTables_wrapper select,
        .dataTables_wrapper input {
          background-color: #f9f9f9;
          border: 1px solid #999;
          border-radius: 4px;
          height: 2rem;
          line-height: 2;
          font-size: 1rem;
          color: #333;
          
        }
        .dataTables_length .dataTables_length,
        .dataTables_length .dataTables_filter,
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
          margin-top: 30px;
          margin-right: 20px;
          margin-bottom: 10px;
          display: inline-flex;
        }

        .paginate_button {
          min-width: 4rem;
          display: inline-block;
          text-align: center;
          padding: 1rem 1rem;
          margin-top: -1rem;
          border: 2px solid lightblue;
        }
        .paginate_button:not(.previous) {
          border-left: none;
        }
        .paginate_button.previous {
          border-radius: 8px 0 0 8px;
          min-width: 7rem;
        }
        .paginate_button.next {
          border-radius: 0 8px 8px 0;
          min-width: 2rem;
        }
        .paginate_button:hover {
          cursor: pointer;
          background-color: #eee;
          text-decoration: none;
        }
  </style>

</style>
<!-- <script src="~/scripts/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

<style>
.btn{
  background:	#93C572;
  color:#000;
}
</style>

<div class= "container">
<table id = "transfermoney" class="table  table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">E-MAIL</th>
        <th scope="col">BALANCE</th>
        <th scope="col">OPERATION</th>
      </tr>
    </thead>

    <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
      </tbody>
</table>
</div>
