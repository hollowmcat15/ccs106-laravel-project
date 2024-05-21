@extends('layout.pagelayout')

@section('content')
<style>
    body {
        font-family: Gotham, sans-serif;
        background-color: #f5f5f5;
    }

    .container {
        padding: 50px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 50px auto;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    h3 {
        color: #333;
        margin-bottom: 10px;
    }

    a {
        display: block;
        color: #007bff;
        text-decoration: none;
        margin-bottom: 10px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <h1>Welcome to the Chairman Page</h1>
        <p>
            This page is for controlling or manipulating the information within the school as chairman. Utilize the school
            database to its fullest potential: access student records for effective communication, manage events,
            track attendance, analyze feedback, maintain documents, provide technical support, generate reports,
            and ensure data security. <b>This page is accessible to the chairman only.</b>
        </p>
        <h3>Options Available</h3>
        <a href="/edit_student">Edit Student Information</a>
        <a href="/addteachers">Add Teacher</a>
        <a href="/edit_teacher">Edit Teacher Information</a>
        <a href="/addsubject">Add Subject</a>
        <a href="/edit_subject">Edit Subject Information</a>
    </div>
</body>
@endsection

