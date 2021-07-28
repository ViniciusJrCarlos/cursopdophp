<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>


</head>
<body>
    <h1> Ola </h1>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user): ?>
          
            <tr>
                <td> <?=$user->id?> </td>
                <td> <?=$user->name?> </td>
            </tr>

            <?php endforeach; ?>
        
        </tbody>
    </table>

</body>
</html>