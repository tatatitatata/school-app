<!DOCTYPE html>
<html>
<head>
    <title>Students by Class</title>

    <style>
    body{
        max-width: 80%;
        background-color: #345995;
        color: #FFFFFF;
        font-family: Helvetica;
        margin: 50px;
    }

    a, a:active{
        text-decoration: none;
        color: #EAC435;
    }

    h1{
        text-align: center;
        font-size: 3rem;
    }

    form{
        font-size: 1.5rem;
    }

    table{
        border-spacing: 10px;
    }

    
</style>
    
</head>
<body>
    <h1>Élèves en {{ $class }}</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom :</th>
                <th>Nom :</th>
                <th>Date de naissance :</th>
                <th>Addresse :</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->adress }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>