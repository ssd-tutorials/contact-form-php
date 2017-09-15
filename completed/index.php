<?php require_once('library/Contact.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Simple Contact Form with PHP</title>
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" />
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,700" />
    <link rel="stylesheet" type="text/css" href="css/core.css" />
    <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>


<form method="post" id="formContact" class="large-8 large-centered columns custom">

    <fieldset>

        <legend>Simple Contact Form with PHP</legend>

        <div class="large-6 columns">

            <label for="first_name">First name: *</label>
            <input
                type="text"
                name="first_name"
                id="first_name"
                placeholder="Your first name" />

        </div>

        <div class="large-6 columns">

            <label for="last_name">Last name: *</label>
            <input
                type="text"
                name="last_name"
                id="last_name"
                placeholder="Your last name" />

        </div>

        <div class="large-6 columns">

            <label for="email">Email address: *</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="Your email address" />

        </div>

        <div class="large-6 columns">

            <label for="type">Enquiry type: *</label>
            <select
                name="type"
                id="type">

                    <option value="">Select one</option>

                    <?php if (!empty(Contact::$types)) { ?>

                        <?php foreach(Contact::$types as $id => $type) { ?>

                            <option value="<?php echo $id; ?>"><?php echo $type; ?></option>

                        <?php } ?>

                    <?php } ?>

                </select>

        </div>

        <div class="large-12 columns">

            <label for="enquiry">Enquiry: *</label>
            <textarea name="enquiry" id="enquiry" placeholder="Your message"></textarea>

        </div>

        <div class="large-12 columns">

            <button class="button small"><i class="icon-envelope"></i> Send message</button>

        </div>

    </fieldset>

</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.forms.js"></script>
<script src="js/core.js"></script>
</body>
</html>















