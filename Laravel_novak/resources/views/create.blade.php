<!DOCTYPE html>
<html>

<head>
    <title>Add a new student</title>

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
    <h1>S'inscrire à l'école</h1>
    <form action="{{ route('students.addStudent') }}" method="POST">
        @csrf
        <label for="surname">Nom :</label>
        <input type="text" name="surname" id="surname" required>
        <br>
        <label for="name">Prénom :</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="birthdate">Date de naissance :</label>
        <input type="date" name="birthdate" id="birthdate" required>
        <br>
        <label for="adress">Addresse :</label>
        <input type="text" name="adress" id="adress" required>
        <br>
        <label for="classroom_id">Classe :</label>
        <select class="form-control" name="classroom_id" id="classroom_id">
            <option value="">Choisir sa classe</option>
            <option value="CP">CP</option>
            <option value="CE1">CE1</option>
            <option value="CE2">CE2</option>
            <option value="CM1">CM1</option>
            <option value="CM2">CM2</option>
        </select>
        <button type="submit">S'inscrire</button>
    </form>