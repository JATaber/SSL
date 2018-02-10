<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="jumbotron">
        <form action="/welcome/formRecv" method="POST" novalidate>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?   if(!empty($_POST)){
                        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                            echo "<p class='alert alert-danger' role='alert'><strong>OH NO!</strong> email is invalid!</p>";
                        }else{
                            echo "<p class='alert alert-success' role='alert'><strong>YAY!</strong> email is valid</p>";
                        }
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <small id="passwordHelp" class="form-text text-muted">Please enter letters</small>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                <?   if(!empty($_POST)){
                    if(!preg_match("/^[a-zA-Z]*$/", $_POST["password"])){
                        echo "<p class='alert alert-danger' role='alert'><strong>OH NO!</strong> select a different password!</p>";
                    }else{
                        echo "<p class='alert alert-success' role='alert'><strong>YAY!</strong> password is good!!</p>";
                    }
                }
                ?>
            </div>
            <div class="form-group">
                <label for="singleSelect">Example select</label>
                <select class="form-control" id="singleSelect">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="multiSelect">Example multiple select</label>
                <select multiple class="form-control" id="multiSelect">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="textarea">Example textarea</label>
                <textarea class="form-control" id="textarea" rows="3"></textarea>
            </div>
            <fieldset class="form-group">
                <legend>Radio buttons</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                    </label>
                </div>
            </fieldset>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>