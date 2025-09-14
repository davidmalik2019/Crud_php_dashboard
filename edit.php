<?php
include 'header.php';
?>
<form action="editteacherprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM teachers WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
          <center><h3>Edit Teacher</h3></center>
				<div class="container">
         <div class="form-elemnt my-4"><br>
         <label>Full Name<br><input class="input" type="text" name="name" value="<?php echo htmlspecialchars($row['name'] ?? ''); ?>" required></label>         
            </div>
            <div class="form-elemnt my-4">
			    <label>Email<br><input class="input" type="text" name="email" value="<?php echo htmlspecialchars($row['email'] ?? ''); ?>" required></label>
            </div>
			<div class="form-elemnt my-4">
			<label>Subject<br><input class="input" type="text" name="subject" value="<?php echo htmlspecialchars($row['subject'] ?? ''); ?>" required></label>
            </div>
			<div class="form-elemnt my-4">
			    <label>Phone<br><input class="input" type="text" name="phone" value="<?php echo htmlspecialchars($row['phone'] ?? ''); ?>" required></label>
            </div>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4"><br>
               <center> <input type="submit" name="editteacher" value="Edit Record" class="btn btn-primary"></center>
            </div>
                <?php
            }else{
                echo "<h3>Chridren Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
        </div>
<?php include 'footer.php'; ?>