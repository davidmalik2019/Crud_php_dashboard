<?php
include 'header.php';
?>
<form action="editstudentprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM students WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
          <center><h3>Edit Student</h3></center>
				<div class="container">
         <div class="form-elemnt my-4"><br>
         <label>Full Name<br><input class="input" type="text" name="name" value="<?php echo htmlspecialchars($row['name'] ?? ''); ?>" required></label>         
            </div>
            <div class="form-elemnt my-4">
			    <label>Email<br><input class="input" type="text" name="email" value="<?php echo htmlspecialchars($row['email'] ?? ''); ?>" required></label>
            </div>
			<div class="form-elemnt my-4">
			<label>Class<br><input class="input" type="text" name="class" value="<?php echo htmlspecialchars($row['class'] ?? ''); ?>" required></label>
            </div>
			<div class="form-elemnt my-4">
			    <label>Age<br><input class="input" type="text" name="age" value="<?php echo htmlspecialchars($row['age'] ?? ''); ?>" required></label>
            </div>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4"><br>
               <center> <input type="submit" name="editstudent" value="Edit Record" class="btn btn-primary"></center>
            </div>
                <?php
            }else{
                echo "<h3>Chridren Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
        </div>
<?php include 'footer.php'; ?>