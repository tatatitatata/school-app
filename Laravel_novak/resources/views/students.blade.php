<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>

    <style>
    body{
        max-width: 80%;
        background-color: #345995;
        color: #FFFFFF;
        font-family: Helvetica;
        margin: 50px;
    }

    h1{
        text-align: center;
        font-size: 3rem;
    }

    form{
        font-size: 1.5rem;
    }

    a, a:active{
        text-decoration: none;
        color: #EAC435;
    }

    table{
        border-spacing: 10px;
    }
    
</style>

</head>

<body>


    <h1>Une super école </h1>

    <h2>S'inscrire</h2>
    <a href="{{ route('students.create') }}">Je m'inscris</a>

    <h2> Liste des élèves par classe, découvrez vos futurs camarades</h2>
    <a href="{{ route('students.byClass', 'CP') }}">CP</a>
        <a href="{{ route('students.byClass', 'CE1') }}" >CE1</a>
        <a href="{{ route('students.byClass', 'CE2') }}" >CE2</a>
        <a href="{{ route('students.byClass', 'CM1') }}" >CM1</a>
        <a href="{{ route('students.byClass', 'CM2') }}" >CM2</a>
   
    <h2>Liste des tous les élèves de la super école</h2>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Addresse</th>
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