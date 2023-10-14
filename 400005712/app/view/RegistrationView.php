<?php
    //require '../controller/RegistrationController.php';
    include("header.php");
?>
    <body>

        <div class="container">
            <form action="./app/controller/RegistrationController.php" method="post">

                <label for="uname-input">Username: </label>
                <input type="text" id="uname-input" required>

                <label for="email-input">Email: </label>
                <input type="text" id="email-input" required>

                <label for="email-confirm">Confirm Email: </label>
                <input type="text" id="email-confirm" required>

                <label for="pass-input">Password: </label>
                <input type="text" id="pass-input" required>

                <label for="pass-confirm">Confirm Password: </label>
                <input type="text" id="pass-confirm" required>

                <label for="roles">Roles: </label>
                <select name="roles" id="roles">
                    <option value="Researcher">Researcher </option>
                    <option value="Research Study Manager">Research Study Manager  </option>
                    <option value="Research Group Manager">Research Group Manager  </option>

                </select>
                <input type="hidden" name="register">
               <button type="submit">Register</button>
            </form>
        </div>
    </body>
<?php
  include("footer.php")
?>
