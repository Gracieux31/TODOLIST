<!DOCTYPE html>
<html lang="en">
<head>
      
        <?php include_once('template/header.php'); ?>   

    <title>TodoList APP</title>
</head>
<body>
    
    <?php include_once('template/navigation.php'); ?>

    <div class="container">
        <div class="row mt-3">
        <div class="col offset-2">
        <h1> TodoList</h1>
        </div>
        </div>

        <form class="row mt-3" id="formAddTodolist" action="?action=editTodolist" method="POST"> 
            <input type="hidden" name="action" value="add_task"> 

            <div class="col-6 offset-2">
                <label for="inputTodolist">A Faire :</label>
                <input type="text" name="inputTodolist" class="form-control" id="inputTodolist" placeholder="Tâche" required>
            </div>

        </form>
        
    </div>





    <?php include_once('template/footer.php'); ?>
</body>
</html>