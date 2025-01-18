<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HTML Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color:#f0f0f0;
        }

        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(153, 51, 102);
        }

        fieldset {
            border: 1px solid black;
            padding: 10px;
            margin: 0;
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 30px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea,
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender-group {
            margin-bottom: 10px;
        }

        .gender-group label {
            display: inline-block;
            margin-left: 10px;
        }

        input[type="radio"] {
            margin-left: 10px;
            vertical-align: middle;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            background-color:rgb(204, 138, 176);
            margin: 10px auto;
            display: block;
        }
        .error {
        color: red;
        font-size: 12px;
        }
        .alert {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if($this->session->flashdata('register_success')): ?>
<script>
  Swal.fire({
    title: 'Success!',
    text: '<?= $this->session->flashdata('register_success'); ?>',
    icon: 'success'
  });
</script>
<?php endif; ?>

<?php if($this->session->flashdata('register_fail')): ?>
<script>
  Swal.fire({
    title: 'Error!',
    text: '<?= $this->session->flashdata('register_fail'); ?>',
    icon: 'error'
  });

</script>
<?php endif; ?>

    <form action="<?php echo site_url('Register/register_user'); ?>" method="post">
        <fieldset>

            <legend>User Personal Information</legend>

            <label for="name">Enter your full name:</label>
            <input type="text" id="name" name="name" />
            <div class="error"><?php echo form_error('name'); ?></div>

            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email"  />
            <div class="error"><?php echo form_error('email'); ?></div>

            <label for="password">Enter your password:</label>
            <input type="password" id="password" name="password"  />
            <div class="error"><?php echo form_error('password'); ?></div>

            <label for="confirmPassword">Confirm your password:</label>
            <input type="password" id="confirmPassword" name="confirmPass"  />
            <div class="error"><?php echo form_error('confirmpass'); ?></div>

            <label>Enter your gender:</label>
            <div class="gender-group">
                <input type="radio" name="gender" value="male" id="male"  />
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" />
                <label for="female">Female</label>
                <input type="radio" name="gender" value="others" id="others" />
                <label for="others">Others</label>
            </div>
            <div class="error"><?php echo form_error('gender'); ?></div>

            <label for="address">Enter your Address:</label>
            <textarea id="address" name="address" ></textarea>
            <div class="error"><?php echo form_error('address'); ?></div>

            <input type="submit" value="Submit" src="login_view"/>
        </fieldset>
    </form>
</body>

</html>