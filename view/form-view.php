<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>MySQL</title>
</head>
<body>
<div class="container">
    <h1>Form to test MySQL</h1>

    <form method="post">
        <button type="submit" class="btn btn-primary" name="read" value="reading">read DB</button>
        <button type="submit" class="btn btn-primary" name="refresh">refresh</button>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">ID:</label>
                <input type="text" id="id" name="id" class="form-control"/>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Information</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">First name:</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Last name:</label>
                    <input type="text" id="last_name" name="last_name" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Linkdin</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Github</label>
                    <input type="text" id="github" name="github" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    </div>
                </div>
                <div class="form-group col-md-6 dropdown-toggle">
                    <label for="city">Preferred language</label>
                    <input type="text" id="preferred_language" name="preferred_language" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Avatar</label>
                    <input type="text" id="avatar" name="avatar" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Video</label>
                    <input type="text" id="video" name="video" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Quote</label>
                    <input type="text" id="quote" name="quote" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Quote Author</label>
                    <input type="text" id="quote_author" name="quote_author" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode"> Created at: </label>
                    <input type="text" id="created_at" name="created_at" class="form-control">
                </div>
            </div>

        </fieldset>
        <button type="submit" class="btn btn-primary" name="submit" value="1">Send</button>
    </form>

    <table class="" style="border: 1px solid black;">

        <tr >
            <th >
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Username
            </th>
            <th>
                LinkedIn
            </th>
            <th>
                Github
            </th>
            <th>
                Email
            </th>
            <th>
                Preferred Language
            </th>
            <th>
                Avatar
            </th>
            <th>
                Video
            </th>
            <th>
                Quote
            </th>
            <th>
                Quote Author
            </th>

        </tr>
        <?php foreach ($students as $print): ?>
        <tr>
            <td>
                <?php echo $print ["first_name"]?>
            </td>
            <td>
                <?php echo $print ["last_name"]?>
            </td>
            <td>
                <?php echo $print ["username"]?>
            </td>
            <td>
                <?php echo $print ["linkdin"]?>
            </td>
            <td>
                <?php echo $print ["github"]?>
            </td>
            <td>
                <?php echo $print ["email"]?>
            </td>
            <td>
                <?php echo $print ["preferred_language"]?>
            </td>
            <td>
                <?php echo $print ["avatar"]?>
            </td>
            <td>
                <?php echo $print ["video"]?>
            </td>
            <td>
                <?php echo $print ["quote"]?>
            </td>
            <td>
                <?php echo $print ["quote_author"]?>
            </td>

        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <?php endforeach;?>
        </tr>
    </table>

</div>

<style>
    footer {
        text-align: center;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
