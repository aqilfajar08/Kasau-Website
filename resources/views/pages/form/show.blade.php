<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Form - Show</h1>

    <p>Account Name : {{ $form->user->name }}</p>
    <p>First Name : {{ $form->first_name }}</p>
    <p>Last Name : {{ $form->last_name }}</p>
    <p>Email : {{ $form->email }}</p>
    <p>Phone Number : {{ $form->phone_number }}</p>
    <p>Subejct : {{ $form->subject }}</p>
    <p>Message : {{ $form->message }}</p>

</body>
</html>